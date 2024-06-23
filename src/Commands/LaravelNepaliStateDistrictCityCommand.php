<?php

namespace AnuzPandey\LaravelNepaliStateDistrictCity\Commands;

use Illuminate\Console\Command;

class LaravelNepaliStateDistrictCityCommand extends Command
{
    public $signature = 'laravel-nepali-state-district-city';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
