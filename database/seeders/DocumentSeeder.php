<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
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
                'name' => "DocReceiptProduct",
                'title' => "Поступление товара",
            ],
            [
                'name' => "DocSaleProduct",
                'title' => "Реализация товара",
            ],
            [
                'name' => "DocMovementProduct",
                'title' => "Перемещение товара",
            ],

        ];

        foreach ($rows as $row) {
            \DB::table('documents')->insert($row);
        }
    }
}
