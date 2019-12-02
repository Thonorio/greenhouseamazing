<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use SensorTableSeeder as SensorTableSeeder;

class DatabaseSeeder extends Seeder
{
    use TruncateTable;

    /**
     * Seed the application's database.
     */
    public function run()
    {
        Model::unguard();

        $this->truncateMultiple([
            'cache',
            'failed_jobs',
            'ledgers',
            'jobs',
            'sessions',
        ]);

        $this->call([
            AuthTableSeeder::class,
            SensorsDataSeeder::class,
        ]);

        Model::reguard();
    }
}
