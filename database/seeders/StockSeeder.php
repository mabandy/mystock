<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows  = [
            [
                'name' => "Stock_1",
            ],
            [
                'name' => "Stock_2",
            ],
            [
                'name' => "Stock_3",
            ],
            [
                'name' => "Stock_4",
            ],
        ];

        foreach ($rows as $row) {
            \DB::table('stocks')->insert($row);
        }
    }
}
