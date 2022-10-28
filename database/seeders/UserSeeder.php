<?php

namespace Database\Seeders;

use Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'name' => "Супер администратор",
                'email' => "admin@admin.ru",
                'role_id' => 1,
                'password' => Hash::make('admin@admin.ru'),
            ],
            [
                'name' => "Супер менеджер",
                'email' => "manager@manager.ru",
                'role_id' => 2,
                'password' => Hash::make('manager@manager.ru'),
            ],
            [
                'name' => "Супер администратор",
                'email' => "user@user.ru",
                'role_id' => 3,
                'password' => Hash::make('user@user.ru'),
            ],

        ];

        foreach ($rows as $row) {
            \DB::table('users')->insert($row);
        }
    }
}
