<?php

declare(strict_types=1);

namespace AnuzPandey\LaravelNepaliStateDistrictCity\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AnuzPandey\LaravelNepaliStateDistrictCity\LaravelNepaliStateDistrictCity
 */
class LaravelNepaliStateDistrictCity extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AnuzPandey\LaravelNepaliStateDistrictCity\LaravelNepaliStateDistrictCity::class;
    }
}
