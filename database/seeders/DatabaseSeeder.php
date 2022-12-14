<?php

namespace Database\Seeders;

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
            StockSeeder::class,
            ProductSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            DocumentSeeder::class,
            DocReceiptProductSeeder::class,
       ]);

    }
}
