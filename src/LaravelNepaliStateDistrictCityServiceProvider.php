<?php

declare(strict_types=1);

namespace AnuzPandey\LaravelNepaliStateDistrictCity;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelNepaliStateDistrictCityServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-nepali-state-district-city')
            ->hasConfigFile()
            ->hasMigration('create_laravel-nepali-state-district-city_table');
    }
}
