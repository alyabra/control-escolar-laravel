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
        // Clases 2023 ->par
        DB::table('clases')->insert([
            'nombre' => 'Calculo IV',
            'user_id' => 17,
            'semestre_id' => 6,
            'materia_id' => 1,
            'creditos' => 10
            
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Cuantica IV',
            'user_id' => 17,
            'semestre_id' => 6,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Relatividad IV',
            'user_id' => 19,
            'semestre_id' => 6,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Optoelectronica IV',
            'user_id' => 18,
            'semestre_id' => 6,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Mecanica estadistica IV',
            'user_id' => 18,
            'semestre_id' => 6,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        // 2023 impar
        // 2023 impar
        // 2023 impar

        DB::table('clases')->insert([
            'nombre' => 'Calculo III',
            'user_id' => 17,
            'semestre_id' => 5,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Cuantica III',
            'user_id' => 17,
            'semestre_id' => 5,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Relatividad III',
            'user_id' => 19,
            'semestre_id' => 5,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Optoelectronica III',
            'user_id' => 18,
            'semestre_id' => 5,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Mecanica estadistica III',
            'user_id' => 18,
            'semestre_id' => 5,
            'materia_id' => 1,
            'creditos' => 10
        ]);

        // 2022
        DB::table('clases')->insert([
            'nombre' => 'Calculo II',
            'user_id' => 17,
            'semestre_id' => 4,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Cuantica II',
            'user_id' => 17,
            'semestre_id' => 4,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Relatividad II',
            'user_id' => 19,
            'semestre_id' => 4,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Optoelectronica II',
            'user_id' => 18,
            'semestre_id' => 4,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Mecanica estadistica II',
            'user_id' => 18,
            'semestre_id' => 4,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        // 2022 impar
        // 2022 impar
        // 2022 impar
        
        DB::table('clases')->insert([
            'nombre' => 'Calculo I',
            'user_id' => 17,
            'semestre_id' => 3,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Cuantica I',
            'user_id' => 17,
            'semestre_id' => 3,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Relatividad I',
            'user_id' => 19,
            'semestre_id' => 3,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Optoelectronica I',
            'user_id' => 18,
            'semestre_id' => 3,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Mecanica estadistica I',
            'user_id' => 18,
            'semestre_id' => 3,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        // Clases 2021
        // Clases 2021

         // Clases 2021 ->par
         DB::table('clases')->insert([
            'nombre' => 'Algebra II',
            'user_id' => 17,
            'semestre_id' => 2,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Geometria IV',
            'user_id' => 17,
            'semestre_id' => 2,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Termodinamica IV',
            'user_id' => 19,
            'semestre_id' => 2,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Optica IV',
            'user_id' => 18,
            'semestre_id' => 2,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Mecanica estadistica IV',
            'user_id' => 18,
            'semestre_id' => 2,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        // 2021 impar
        // 2021 impar
        // 2021 impar
        DB::table('clases')->insert([
            'nombre' => 'Algebra I',
            'user_id' => 17,
            'semestre_id' => 1,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Geometria III',
            'user_id' => 17,
            'semestre_id' => 1,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Termodinamica III',
            'user_id' => 19,
            'semestre_id' => 1,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Optica III',
            'user_id' => 18,
            'semestre_id' => 1,
            'materia_id' => 1,
            'creditos' => 10
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Mecanica estadistica III',
            'user_id' => 18,
            'semestre_id' => 1,
            'materia_id' => 1,
            'creditos' => 10
        ]);

    
    

    }
}
