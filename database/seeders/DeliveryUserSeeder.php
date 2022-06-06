<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliveryUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('delivery_users')->insert([
            [
                'first_name' => 'Fernando',
                'last_name' => 'Carranza',
                'phone' => '22221100',
                'dui' => '05998844-1',
                'birthday' => '1999-05-25',
                'license_number' => '0614-250599-103-7',
                'plate_number' => 'AB152515',
                'vehicle_model' => 'Sedán',
                'user_id' => 2,
            ]
        ]);
    }
}
