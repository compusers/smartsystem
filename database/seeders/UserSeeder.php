<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Super Administrador',
            'email' => 'sadmin@smart-systems.com.mx',
            'password' => bcrypt('Ramona2022*'),
            'puesto' => 'Administador',
            'status' => 'Activo',
            'observaciones' => 'Generados Automaticamente'
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Almacén',
            'email' => 'almacen@smart-systems.com.mx',
            'password' => bcrypt('Ramona2022*'),
            'puesto' => 'Almacen',
            'status' => 'Activo',
            'observaciones' => 'Generados Automaticamente'
        ])->assignRole('Almacén');

        User::create([
            'name' => 'Cobranza',
            'email' => 'cobranza@smart-systems.com.mx',
            'password' => bcrypt('Ramona2022*'),
            'puesto' => 'Cobranza',
            'status' => 'Activo',
            'observaciones' => 'Generados Automaticamente'
        ])->assignRole('Cobranza');

        User::create([
            'name' => 'Garantías',
            'email' => 'garantias@smart-systems.com.mx',
            'password' => bcrypt('Ramona2022*'),
            'puesto' => 'Garantías',
            'status' => 'Activo',
            'observaciones' => 'Generados Automaticamente'
        ])->assignRole('Garantías');

        User::create([
            'name' => 'Soporte Técnico',
            'email' => 'soportetecnico@smart-systems.com.mx',
            'password' => bcrypt('Ramona2022*'),
            'puesto' => 'Soporte Técnico',
            'status' => 'Activo',
            'observaciones' => 'Generados Automaticamente'
        ])->assignRole('Soporte Técnico');

        User::create([
            'name' => 'Técnico',
            'email' => 'tecnico@smart-systems.com.mx',
            'password' => bcrypt('Ramona2022*'),
            'puesto' => 'Técnico',
            'status' => 'Activo',
            'observaciones' => 'Generados Automaticamente'
        ])->assignRole('Técnico');

        User::create([
            'name' => 'Monitoreo',
            'email' => 'monitoreo@smart-systems.com.mx',
            'password' => bcrypt('Ramona2022*'),
            'puesto' => 'Monitoreo',
            'status' => 'Activo',
            'observaciones' => 'Generados Automaticamente'
        ])->assignRole('Monitoreo');

        //User::factory(30)->create();
    }
}
