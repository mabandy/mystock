<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
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
                'name' => "Samsung V245",
                'price' => 1245.4,
            ],
            [
                'name' => "Panasonics C100",
                'price' => 124.1,
            ],
            [
                'name' => "Навоз",
                'price' => 225,
            ],
            [
                'name' => "Гитара",
                'price' => 12,
            ],



        ];

        foreach ($rows as $row) {
            \DB::table('products')->insert($row);
        }
    }
}
