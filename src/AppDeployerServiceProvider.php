<?php

namespace AppDeployer;

use AppDeployer\Commands\AppDeployerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AppDeployerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('app_deployer')
            ->hasCommand(AppDeployerCommand::class);
    }
}
