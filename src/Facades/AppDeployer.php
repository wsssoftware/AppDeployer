<?php

namespace AppDeployer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AppDeployer\AppDeployer
 */
class AppDeployer extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AppDeployer\AppDeployer::class;
    }
}
