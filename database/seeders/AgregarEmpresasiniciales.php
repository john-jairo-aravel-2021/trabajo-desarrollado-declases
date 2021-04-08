<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class AgregarEmpresasiniciales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');
        for ($i=0; $i < 20 ; $i++) { 
            DB::table('empresas')->insert([
                'nombre' => $faker->company,
                'nit' => $faker->numberBetween(9999,99999999)
            ]);
        }
    }
}
