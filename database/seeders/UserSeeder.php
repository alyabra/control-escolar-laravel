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
        // Estudiantes
        // Estudiantes
        // Estudiantes

        DB::table('users')->insert([
            'name' => 'Jonathan Gaytan Becerra',
            'email' => 'studiante1@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '3',
            'enrollment' => '23E1'
        ]);
        DB::table('users')->insert([
            'name' => 'Mario Gaytan Becerra',
            'email' => 'studiante2@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '3',
            'enrollment' => '23E2'
        ]);
        DB::table('users')->insert([
            'name' => 'Miram Maya Conejo',
            'email' => 'studiante3@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '3',
            'enrollment' => '23E3'
        ]);
        DB::table('users')->insert([
            'name' => 'Miram Maya Contreras',
            'email' => 'studiante4@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '3',
            'enrollment' => '23E4'
        ]);
        DB::table('users')->insert([
            'name' => 'Daniela Andrade Amaro',
            'email' => 'studiante5@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '3',
            'enrollment' => '23E5'
        ]);
        DB::table('users')->insert([
            'name' => 'Yolanda Villicaña Cendejas',
            'email' => 'studiante6@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '3',
            'enrollment' => '23E6'
        ]);
        DB::table('users')->insert([
            'name' => 'Louerdez Buen Rostro',
            'email' => 'studiante7@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '3',
            'enrollment' => '23E7'
        ]);
        DB::table('users')->insert([
            'name' => 'Guillermo Del Toro',
            'email' => 'studiante8@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '3',
            'enrollment' => '23E8'
        ]);
        DB::table('users')->insert([
            'name' => 'Guillermo Jose Ignacio Perez',
            'email' => 'studiante9@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '3',
            'enrollment' => '23E9'
        ]);
        DB::table('users')->insert([
            'name' => 'Juanquin Pardavel Sandia',
            'email' => 'studiante10@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '3',
            'enrollment' => '23E10'
        ]);
        DB::table('users')->insert([
            'name' => 'Miguel Pardavel Sandia',
            'email' => 'studiante11@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '3',
            'enrollment' => '23E11'
        ]);
        DB::table('users')->insert([
            'name' => 'Gwendolin Arnica Guillen',
            'email' => 'studiante12@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '3',
            'enrollment' => '23E12'
        ]);
        DB::table('users')->insert([
            'name' => 'Veronica Casto Roque',
            'email' => 'studiante13@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '3',
            'enrollment' => '23E13'
        ]);

        // Profesores
        // Profesores
        // Profesores
        // Profesores
        // Profesores
        // Profesores

        DB::table('users')->insert([
            'name' => 'Gabriel Garcia Marquez',
            'email' => 'profe1@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '2',
            'enrollment' => '23P1'
        ]);
        DB::table('users')->insert([
            'name' => 'Jose Emilio Pacheco Berny',
            'email' => 'profe2@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '2',
            'enrollment' => '23P2'
        ]);
        DB::table('users')->insert([
            'name' => 'Amélie Paula Dolores Poniatowska',
            'email' => 'profe3@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '2',
            'enrollment' => '23P3'
        ]);
        
        DB::table('users')->insert([
            'name' => 'Pablo Neruda',
            'email' => 'profe4@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '2',
            'enrollment' => '23P4'
        ]);
        DB::table('users')->insert([
            'name' => 'Jorge Luis Borges ',
            'email' => 'profe5@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '2',
            'enrollment' => '23P5'
        ]);
        
        DB::table('users')->insert([
            'name' => 'Julio Cortázar',
            'email' => 'profe6@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '2',
            'enrollment' => '23P6'
        ]);
        DB::table('users')->insert([
            'name' => 'Isabel Allende',
            'email' => 'profe7@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '2',
            'enrollment' => '23P7'
        ]);
        DB::table('users')->insert([
            'name' => 'Carlos Fuentes',
            'email' => 'profe8@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '2',
            'enrollment' => '23P8'
        ]);
        DB::table('users')->insert([
            'name' => 'Natalia Lafurcade Lopez',
            'email' => 'profe9@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '2',
            'enrollment' => '23P9'
        ]);
        DB::table('users')->insert([
            'name' => 'Octavio Paz',
            'email' => 'profe10@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '2',
            'enrollment' => '23P10'
        ]);
        DB::table('users')->insert([
            'name' => 'Juan Rulfo',
            'email' => 'profe11@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '2',
            'enrollment' => '23P11'
        ]);

        // Administradores
        // Administradores
        // Administradores
        // Administradores

        DB::table('users')->insert([
            'name' => 'Natalia Lafurcade',
            'email' => 'admin1@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '1',
            'enrollment' => '23A1'
        ]);
        DB::table('users')->insert([
            'name' => 'Dua Lipa',
            'email' => 'admin2@example.com',
            'password' => Hash::make('contraseña'),
            'rol' => '1',
            'enrollment' => '23A2'
        ]);
    }
}
