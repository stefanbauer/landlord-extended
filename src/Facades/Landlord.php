<?php

namespace StefanBauer\Landlord\Facades;

use StefanBauer\Landlord\TenantManager;
use Illuminate\Support\Facades\Facade;

class Landlord extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return TenantManager::class;
    }
}
