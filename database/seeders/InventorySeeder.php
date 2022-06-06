<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventories')->insert([
            ['existence' => 10, 'product_id' => 1],
            ['existence' => 5, 'product_id' => 2],
            ['existence' => 2, 'product_id' => 3],
            ['existence' => 20, 'product_id' => 4],
        ]);
    }
}
