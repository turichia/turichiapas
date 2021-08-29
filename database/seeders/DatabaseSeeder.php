<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        $admin = new \App\Models\Administrador();
        $admin->usuario = 'admin';
        $admin->nombre = 'Jonathan Morales';
        $admin->telefono = '9621039865';
        $admin->email = 'jonamorales1801@gmail.com';
        $admin->pass = Hash::make('admin.tienda');
        $admin->save();

        $cliente = new \App\Models\Cliente();
        $cliente->usuario = 'pruebas2';
        $cliente->nombre = 'Jonathan Morales';
        $cliente->telefono = '9621039865';
        $cliente->email = 'jonamorales1801@gmail.com';
        $cliente->pass = Hash::make('cliente.1234');
        $cliente->direccion = 'Conocida';
        $cliente->colonia = 'Canton Hermosillo';
        $cliente->municipio = 'Tapachula';
        $cliente->ciudad = 'Tapachula';
        $cliente->estado = 'Chiapas';
        $cliente->save();
    }
}
