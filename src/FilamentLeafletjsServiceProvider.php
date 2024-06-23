<?php

namespace IbrahimBougaoua\FilamentLeafletjs;

use IbrahimBougaoua\FilamentLeafletjs\Commands\FilamentLeafletjsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentLeafletjsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-leafletjs')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-leafletjs_table')
            ->hasCommand(FilamentLeafletjsCommand::class);
    }
}
