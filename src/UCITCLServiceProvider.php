<?php

namespace AgenceKonig\UCITCL;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AgenceKonig\UCITCL\Commands\UCITCLCommand;

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
