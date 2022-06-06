<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Funko POP! Loki with Scepter, Entertainment Earth Exclusive',
                'description' => "Funko POP! Loki with Scepter – Entertainment Earth Exclusive",
                'price' => 25.00,
                'product_type_id' => 1,
                'company_id' => 1,
            ],
            [
                'name' => 'Figura Usopp – Bandai',
                'description' => "Figura Usopp – Bandai",
                'price' => 85.00,
                'product_type_id' => 2,
                'company_id' => 1,
            ],
            [
                'name' => 'Funko Pop 786:Pennywise (IT) 10 pulgadas',
                'description' => "-Colecciona al aterrador Pennywise 10 pulgadas de alto !",
                'price' => 50.00,
                'product_type_id' => 1,
                'company_id' => 2,
            ],
            [
                'name' => 'Reserva – Figura EVANGELION: 3.0+1.0 Thrice Upon a Time Asuka Langley On The Beach',
                'description' => "FECHA DE SALIDA: OCTUBRE 2022",
                'price' => 45.00,
                'product_type_id' => 2,
                'company_id' => 2,
            ],
        ]);
    }
}
