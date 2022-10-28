<?php

namespace Database\Seeders;

use App\Models\DocReceiptProduct;
use App\Models\MovementProduct;
use Illuminate\Database\Seeder;

class DocReceiptProductSeeder extends Seeder
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
               'amount'=>12,
                'comment'=>"Поступление товара от рыба мясо",
                'user_id'=>2,
                'stock_id'=>1,
                'document_id'=>1
            ],
            [
                'amount'=>145,
                'comment'=>"Поступление товара от гвоздодер",
                'user_id'=>2,
                'stock_id'=>1,
                'document_id'=>1
            ],
            [
                'amount'=>214,
                'comment'=>"Поступление от Самсунг чернозем",
                'user_id'=>2,
                'stock_id'=>1,
                'document_id'=>1
            ],

        ];
            $products = \App\Models\Product::all();

        foreach ($rows as $row) {
           $doc = DocReceiptProduct::create($row); 

            foreach($products as $product){
                $rowproduct = [
                    'amt'=>rand(1,15),
                    'product_id'=>$product->id,
                    'user_id'=>2,
                    'stock_id'=>1,
                    'document_id'=>1,
                    'doc_number'=>$doc->id,
                ];
                MovementProduct::create($rowproduct);
            }
        }
    }
}
