<?php

namespace UoMosul\UomIdPackageLaravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Ory\Kratos\Client\Api\FrontendApi;

class AuthController
{
    public function current_user(Request $request)
    {
        return $request->user() ?? (object) [];
    }

    public function login(Request $request)
    {
        $returnToUrl = route(config('uom-id.auth.uom.redirects.login'));
        $loginRouteUrl = config('uom-id.auth.uom.routes.login');

        $loginUrl = $request::create($loginRouteUrl)->fullUrlWithQuery([
            'return_to' => $returnToUrl,
        ]);

        return redirect($loginUrl);
    }

    public function logout(Request $request, FrontendApi $frontendApi)
    {
        try {
            $response = $frontendApi->createBrowserLogoutFlow($request->header('Cookie'));
            $logoutUrl = $request::create($response['logoutUrl'])->fullUrlWithQuery([
                'return_to' => route(config('uom-id.auth.uom.redirects.logout')),
            ]);

            return redirect($logoutUrl);
        } catch (\Ory\Kratos\Client\ApiException $err) {
            $errorBody = json_decode($err->getResponseBody());

            // Handle null error body
            if (is_null($errorBody)) {
                if (App::hasDebugModeEnabled()) {
                    return response()->json(['message' => $err->getMessage()]);
                } else {
                    return $this->genericJsonErrorResponse();
                }
            }

            // TODO: Use errorId as you wish
            $errorId = $errorBody->error->id;

            return redirect(route(config('uom-id.auth.uom.redirects.logout')));
        }
    }

    private function genericJsonErrorResponse()
    {
        return response()->json(['message' => 'An unknown error has occurred, please contact the server administrator.']);
    }
}
