<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Nombre del usuario',
            'email' => 'correo22@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '3',
            'enrollment' => 'PQRS'
        ]);
        DB::table('users')->insert([
            'name' => 'Estudiante Chido 1',
            'email' => 'estu1@mail',
            'password' => Hash::make('contraseña'),
            'rol' => '3',
            'enrollment' => 'PQRS'
        ]);
        DB::table('users')->insert([
            'name' => 'Estudiante Chido 2',
            'email' => 'estu2@mail',
            'password' => Hash::make('contraseña'),
            'rol' => '3',
            'enrollment' => 'PQRS2'
        ]);
        DB::table('users')->insert([
            'name' => 'Estudiante Chido a3',
            'email' => 'estua3@mail',
            'password' => Hash::make('contraseña'),
            'rol' => '3',
            'enrollment' => 'PQRSa3'
        ]);
        DB::table('users')->insert([
            'name' => 'Estudiante Chido a4',
            'email' => 'estua4@mail',
            'password' => Hash::make('contraseña'),
            'rol' => '3',
            'enrollment' => 'PQRSa4'
        ]);
        DB::table('users')->insert([
            'name' => 'Estudiante Chido a5',
            'email' => 'estua5@mail',
            'password' => Hash::make('contraseña'),
            'rol' => '3',
            'enrollment' => 'PQRSa5'
        ]);
        DB::table('users')->insert([
            'name' => 'Estudiante Chido a6',
            'email' => 'estua6@mail',
            'password' => Hash::make('contraseña'),
            'rol' => '3',
            'enrollment' => 'PQRSa6'
        ]);
    }
}
