<?php

namespace UoMosul\UomIdPackageLaravel\Http\Controllers;

use Illuminate\Http\Request;

class AuthController
{
    public function current_user(Request $request)
    {
        return $request->user() ?? (object) [];
    }

    public function login(Request $request)
    {
        $returnToUrl = route(config('uom-id.auth.uom.redirects.login'));
        $loginRouteUrl =  config('uom-id.auth.uom.routes.login');

        $loginUrl = $request::create($loginRouteUrl)->fullUrlWithQuery([
            'return_to' => $returnToUrl,
        ]);

        return redirect($loginUrl);
    }

    public function logout(Request $request)
    {
        $returnToUrl = route(config('uom-id.auth.uom.redirects.login'));
        $logoutRouteUrl =  config('uom-id.auth.uom.routes.logout');

        $logoutUrl = $request::create($logoutRouteUrl)->fullUrlWithQuery([
            'return_to' => $returnToUrl,
        ]);

        return redirect($logoutUrl);
    }
}
