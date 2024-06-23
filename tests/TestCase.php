<?php

namespace AnuzPandey\LaravelNepaliStateDistrictCity\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use AnuzPandey\LaravelNepaliStateDistrictCity\LaravelNepaliStateDistrictCityServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'AnuzPandey\\LaravelNepaliStateDistrictCity\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelNepaliStateDistrictCityServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-nepali-state-district-city_table.php.stub';
        $migration->up();
        */
    }
}
