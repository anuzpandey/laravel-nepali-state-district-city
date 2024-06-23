<?php

namespace AnuzPandey\LaravelNepaliStateDistrictCity;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AnuzPandey\LaravelNepaliStateDistrictCity\Commands\LaravelNepaliStateDistrictCityCommand;

class LaravelNepaliStateDistrictCityServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-nepali-state-district-city')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-nepali-state-district-city_table')
            ->hasCommand(LaravelNepaliStateDistrictCityCommand::class);
    }
}
