<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AsetSeeder::class,
            UserSeeder::class,
            KeuanganSeeder::class,
            MarketingSeeder::class,
            // TeknikSeeder::class,
            TenantSeeder::class,
            BankSeeder::class,
        ]);
    }
}
