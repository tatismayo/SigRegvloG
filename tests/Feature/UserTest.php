<?php

use Illuminate\Support\Str;

it('Prueba', function () {
    $response = $this->actingAs(\App\Models\User::factory()->create([
        'name' => fake()->name(),
        'cedula' => Str::random(10),
        'telefono' => Str::random(10),
        'ciudad' => 'Manizales',
        'email' => fake()->safeEmail(),
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'rol' => 'Gestor',
        'area' => 'Gestión humana',
    ]))->get('/');

    $response ->assertStatus(200);
});