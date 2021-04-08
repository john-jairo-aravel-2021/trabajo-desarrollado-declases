<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AgregarEmpresasIniciales;
use Database\Seeders\AgregarUsuariosiniciales;
use Database\Seeders\AgregarEmpresasAdicionales;
use Database\Seeders\AgregarEmpleadosAdicionales;

class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AgregarEmpresasiniciales::Class);
        $this->call(AgregarEmpleadosIniciales::CLass);
        $this->call(AgregarEmpresasAdicionales::CLass);
        $this->call(AgregarEmpleadosAdicionales::CLass);

    }
}
