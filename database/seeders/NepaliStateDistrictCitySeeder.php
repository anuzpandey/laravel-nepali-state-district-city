<?php

declare(strict_types=1);

namespace AnuzPandey\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class NepaliStateDistrictCitySeeder extends Seeder
{
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('states')->truncate();
        DB::table('districts')->truncate();
        DB::table('cities')->truncate();
        Schema::enableForeignKeyConstraints();

        $this->call([
            StateSeeder::class,
            DistrictSeeder::class,
            CitySeeder::class,
        ]);
    }
}
