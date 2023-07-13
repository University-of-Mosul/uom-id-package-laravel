<?php

namespace UoMosul\UomIdPackageLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \UoMosul\UomIdPackageLaravel\UomIdPackageLaravel
 */
class UomIdPackageLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \UoMosul\UomIdPackageLaravel\UomIdPackageLaravel::class;
    }
}
