<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clases 2023 ->impar
        DB::table('clases')->insert([
            'nombre' => 'Matematicas II',
            'user_id' => 17,
            'year' => 2023,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 2,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Fisica II',
            'user_id' => 17,
            'year' => 2023,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 1,
        ]);
        // DB::table('clases')->insert([
        //     'nombre' => 'Algebra lineal I',
        //     'user_id' => 18,
        //     'year' => 2023,
        //     'active' => 1,
        //     'creditos' => 12,
        //     'tipo_semestre' => 1,
        // ]);
        // DB::table('clases')->insert([
        //     'nombre' => 'Algebra II',
        //     'user_id' => 18,
        //     'year' => 2023,
        //     'active' => 1,
        //     'creditos' => 12,
        //     'tipo_semestre' => 1,
        // ]);
        // DB::table('clases')->insert([
        //     'nombre' => 'Topología I',
        //     'user_id' => 18,
        //     'year' => 2023,
        //     'active' => 1,
        //     'creditos' => 12,
        //     'tipo_semestre' => 2,
        // ]);
        // DB::table('clases')->insert([
        //     'nombre' => 'Topología II',
        //     'user_id' => 18,
        //     'year' => 2023,
        //     'active' => 1,
        //     'creditos' => 12,
        //     'tipo_semestre' => 2,
        // ]);
        DB::table('clases')->insert([
            'nombre' => 'Matematicas I',
            'user_id' => 17,
            'year' => 2022,
            'active' => 0,
            'creditos' => 12,
            'tipo_semestre' => 2,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Fisica I',
            'user_id' => 17,
            'year' => 2022,
            'active' => 0,
            'creditos' => 12,
            'tipo_semestre' => 1,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Calculo 2',
            'user_id' => 18,
            'year' => 2021,
            'active' => 0,
            'creditos' => 12,
            'tipo_semestre' => 2,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Calculo',
            'user_id' => 18,
            'year' => 2021,
            'active' => 0,
            'creditos' => 12,
            'tipo_semestre' => 1,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Aritmetica 2',
            'user_id' => 17,
            'year' => 2020,
            'active' => 0,
            'creditos' => 12,
            'tipo_semestre' => 2,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Aritmetica',
            'user_id' => 17,
            'year' => 2020,
            'active' => 0,
            'creditos' => 12,
            'tipo_semestre' => 1,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Geometria 2',
            'user_id' => 18,
            'year' => 2019,
            'active' => 0,
            'creditos' => 12,
            'tipo_semestre' => 2,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Geometria',
            'user_id' => 18,
            'year' => 2019,
            'active' => 0,
            'creditos' => 12,
            'tipo_semestre' => 1,
        ]);
    }
}
