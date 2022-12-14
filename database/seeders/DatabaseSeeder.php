<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Administrador - Tatiana Marin Sepulveda',
            'cedula' => '1060649566',
            'telefono' => '3176373673',
            'ciudad' => 'Manizales',
            'email' => 'tatismayo@hotmail.com',
            'password' => Hash::make('Manizales'),
            'rol' => 'Administrador',
            'area' => 'Evaluacion y control|Gestion estrategica|Gobierno corporativo|Gestion proyectos operaciones|Gestion comercial|Gestion administrativa y financiera|Innovacion y tecnologia|'
        ]);
    }
}
