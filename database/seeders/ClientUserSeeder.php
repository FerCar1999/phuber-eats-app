<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client_users')->insert([
            [
                'first_name' => 'Fernando',
                'last_name' => 'Carranza',
                'phone' => '22221100',
                'dui' => '05998844-2',
                'address' => 'Avenida siempre viva',
                'birthday' => '1999-05-25',
                'user_id' => 3,
            ]
        ]);
    }
}
