<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Carpeta;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $tiposDocumentos=['TRAMITES','TRANPARENCIA','RENDICIÓN DE CUENTAS'];

        foreach ($tiposDocumentos as $td) {
            Carpeta::firstOrCreate(
                ['nombre'=>$td],
            );   
        }
    }
}
