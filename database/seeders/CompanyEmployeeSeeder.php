<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_employees')->insert([
            [
                'first_name' => 'Fernando',
                'last_name' => 'Carranza',
                'phone' => '22221122',
                'company_id' => 1,
                'user_id' => 2,
            ],
            [
                'first_name' => 'Fernando',
                'last_name' => 'Carranza',
                'phone' => '22221123',
                'company_id' => 2,
                'user_id' => 4,
            ],
        ]);
    }
}
