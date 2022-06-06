<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'user' => 'fercarranza99',
                'password' => bcrypt('admin12345'),
                'email' => 'carranzafernando99@gmail.com',
                'user_type_id' => 1,
            ],
            [
                'user' => 'fercarranza97',
                'password' => bcrypt('delivery12345'),
                'email' => 'carranzafernando97@gmail.com',
                'user_type_id' => 2,
            ],
            [
                'user' => 'fercarranza98',
                'password' => bcrypt('client12345'),
                'email' => 'carranzafernando98@gmail.com',
                'user_type_id' => 3,
            ],
            [
                'user' => 'fercarranza96',
                'password' => bcrypt('admin212345'),
                'email' => 'carranzafernando96@gmail.com',
                'user_type_id' => 1,
            ],
        ]);
    }
}
