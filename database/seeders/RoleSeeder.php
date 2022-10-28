<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows  = [
            ['name' => "Администратор"],
            ['name' => "Менеджер"],
            ['name' => 'Пользователь']
        ];

        foreach($rows as $row){
            DB::table('roles')->insert($row);
        }
        
    }
}
