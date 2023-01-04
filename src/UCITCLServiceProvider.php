<?php

namespace AgenceKonig\UCITCL;

use AgenceKonig\UCITCL\Commands\UCITCLCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class UCITCLServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('smart-manager-flm-ucitcl')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_smart-manager-flm-ucitcl_table')
            ->hasCommand(UCITCLCommand::class);
    }
}
