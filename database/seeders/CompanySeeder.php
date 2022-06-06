<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            [
                'name' => 'Nize Store',
                'phone' => '22551122',
                'nit' => '0614-010174-103-7',
            ],
            [
                'name' => 'The Comic Store',
                'phone' => '22551123',
                'nit' => '0614-010190-103-7',
            ]
        ]);
    }
}
