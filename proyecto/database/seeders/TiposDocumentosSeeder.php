<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiposDocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_documentos')->insert([
            ['Descripcion' => 'DNI'],
            ['Descripcion' => 'Pasaporte'],
            ['Descripcion' => 'Cédula'],
            ['Descripcion' => 'Tarjeta de identidad'],
        ]);

    }
}
