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
            'user_id' => 17,
            'semestre_id' => 6,
            'materia_id' => 1,
            
        ]);
        DB::table('clases')->insert([
            'user_id' => 17,
            'semestre_id' => 6,
            'materia_id' => 1,
        ]);
        DB::table('clases')->insert([
            'user_id' => 19,
            'semestre_id' => 6,
            'materia_id' => 1,
        ]);
        DB::table('clases')->insert([
            'user_id' => 18,
            'semestre_id' => 6,
            'materia_id' => 1,
        ]);
        DB::table('clases')->insert([
            'user_id' => 18,
            'semestre_id' => 6,
            'materia_id' => 1,
        ]);
        // 2023 impar
        // 2023 impar
        // 2023 impar
        // 2023 impar

        DB::table('clases')->insert([
            'user_id' => 17,
            'semestre_id' => 5,
            'materia_id' => 1,
        ]);
        DB::table('clases')->insert([
            'user_id' => 17,
            'semestre_id' => 5,
            'materia_id' => 2,
        ]);
        DB::table('clases')->insert([
            'user_id' => 19,
            'semestre_id' => 5,
            'materia_id' => 3,
        ]);
        DB::table('clases')->insert([
            'user_id' => 18,
            'semestre_id' => 5,
            'materia_id' => 4,
        ]);
        DB::table('clases')->insert([
            'user_id' => 18,
            'semestre_id' => 5,
            'materia_id' => 5,
        ]);

        // 2022
        DB::table('clases')->insert([
            'user_id' => 17,
            'semestre_id' => 4,
            'materia_id' => 6,
        ]);
        DB::table('clases')->insert([
            'user_id' => 17,
            'semestre_id' => 4,
            'materia_id' => 1,
        ]);
        DB::table('clases')->insert([
            'user_id' => 19,
            'semestre_id' => 4,
            'materia_id' => 1,
        ]);
        DB::table('clases')->insert([
            'user_id' => 18,
            'semestre_id' => 4,
            'materia_id' => 1,
        ]);
        DB::table('clases')->insert([
            'user_id' => 18,
            'semestre_id' => 4,
            'materia_id' => 1,
        ]);
        // 2022 impar
        // 2022 impar
        // 2022 impar
        
        DB::table('clases')->insert([
            'user_id' => 17,
            'semestre_id' => 3,
            'materia_id' => 1,
        ]);
        DB::table('clases')->insert([
            'user_id' => 17,
            'semestre_id' => 3,
            'materia_id' => 1,
        ]);
        DB::table('clases')->insert([
            'user_id' => 19,
            'semestre_id' => 3,
            'materia_id' => 1,
        ]);
        DB::table('clases')->insert([
            'user_id' => 18,
            'semestre_id' => 3,
            'materia_id' => 1,
        ]);
        DB::table('clases')->insert([
            'user_id' => 18,
            'semestre_id' => 3,
            'materia_id' => 1,
        ]);
        // Clases 2021
        // Clases 2021
        // Clases 2021 ->par
         DB::table('clases')->insert([
            'user_id' => 17,
            'semestre_id' => 2,
            'materia_id' => 1,
        ]);
        DB::table('clases')->insert([
            'user_id' => 17,
            'semestre_id' => 2,
            'materia_id' => 1,
        ]);
        DB::table('clases')->insert([
            'user_id' => 19,
            'semestre_id' => 2,
            'materia_id' => 1,
        ]);
        DB::table('clases')->insert([
            'user_id' => 18,
            'semestre_id' => 2,
            'materia_id' => 1,
        ]);
        DB::table('clases')->insert([
            'user_id' => 18,
            'semestre_id' => 2,
            'materia_id' => 1,
        ]);
        // 2021 impar
        // 2021 impar
        // 2021 impar
        DB::table('clases')->insert([
            'user_id' => 17,
            'semestre_id' => 1,
            'materia_id' => 1,
        ]);
        DB::table('clases')->insert([
            'user_id' => 17,
            'semestre_id' => 1,
            'materia_id' => 1,
        ]);
        DB::table('clases')->insert([
            'user_id' => 19,
            'semestre_id' => 1,
            'materia_id' => 1,
        ]);
        DB::table('clases')->insert([
            'user_id' => 18,
            'semestre_id' => 1,
            'materia_id' => 1,
        ]);
        DB::table('clases')->insert([
            'user_id' => 18,
            'semestre_id' => 1,
            'materia_id' => 1,
        ]);    
    }
}
