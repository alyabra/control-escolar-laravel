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
            'year' => 2023,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 2,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Cuantica IV',
            'user_id' => 17,
            'year' => 2023,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 2,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Relatividad IV',
            'user_id' => 19,
            'year' => 2023,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 2,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Optoelectronica IV',
            'user_id' => 18,
            'year' => 2023,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 2,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Mecanica estadistica IV',
            'user_id' => 18,
            'year' => 2023,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 2,
        ]);
        // 2023 impar
        // 2023 impar
        // 2023 impar

        DB::table('clases')->insert([
            'nombre' => 'Calculo III',
            'user_id' => 17,
            'year' => 2023,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 1,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Cuantica III',
            'user_id' => 17,
            'year' => 2023,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 1,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Relatividad III',
            'user_id' => 19,
            'year' => 2023,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 1,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Optoelectronica III',
            'user_id' => 18,
            'year' => 2023,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 1,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Mecanica estadistica III',
            'user_id' => 18,
            'year' => 2023,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 1,
        ]);

        // 2022
        DB::table('clases')->insert([
            'nombre' => 'Calculo II',
            'user_id' => 17,
            'year' => 2022,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 2,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Cuantica II',
            'user_id' => 17,
            'year' => 2022,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 2,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Relatividad II',
            'user_id' => 19,
            'year' => 2022,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 2,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Optoelectronica II',
            'user_id' => 18,
            'year' => 2022,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 2,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Mecanica estadistica II',
            'user_id' => 18,
            'year' => 2022,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 2,
        ]);
        // 2022 impar
        // 2022 impar
        // 2022 impar

        DB::table('clases')->insert([
            'nombre' => 'Calculo I',
            'user_id' => 17,
            'year' => 2022,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 1,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Cuantica I',
            'user_id' => 17,
            'year' => 2022,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 1,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Relatividad I',
            'user_id' => 19,
            'year' => 2022,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 1,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Optoelectronica I',
            'user_id' => 18,
            'year' => 2022,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 1,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Mecanica estadistica I',
            'user_id' => 18,
            'year' => 2022,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 1,
        ]);
        // Clases 2021
        // Clases 2021

         // Clases 2021 ->par
         DB::table('clases')->insert([
            'nombre' => 'Algebra II',
            'user_id' => 17,
            'year' => 2021,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 2,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Geometria IV',
            'user_id' => 17,
            'year' => 2021,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 2,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Termodinamica IV',
            'user_id' => 19,
            'year' => 2021,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 2,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Optica IV',
            'user_id' => 18,
            'year' => 2021,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 2,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Mecanica estadistica IV',
            'user_id' => 18,
            'year' => 2021,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 2,
        ]);
        // 2021 impar
        // 2021 impar
        // 2021 impar

        DB::table('clases')->insert([
            'nombre' => 'Algebra I',
            'user_id' => 17,
            'year' => 2021,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 1,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Geometria III',
            'user_id' => 17,
            'year' => 2021,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 1,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Termodinamica III',
            'user_id' => 19,
            'year' => 2021,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 1,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Optica III',
            'user_id' => 18,
            'year' => 2021,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 1,
        ]);
        DB::table('clases')->insert([
            'nombre' => 'Mecanica estadistica III',
            'user_id' => 18,
            'year' => 2021,
            'active' => 1,
            'creditos' => 12,
            'tipo_semestre' => 1,
        ]);

    
    

    }
}
