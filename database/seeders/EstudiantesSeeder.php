<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // clase 1 con calificacion final
        DB::table('estudiantes')->insert([
            'clase_id' => 1,
            'user_id' => 1,
            'regular' => 1,
            'calificacionFinal' => 9  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 1,
            'user_id' => 2,
            'regular' => 1,
            'calificacionFinal' => 9  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 1,
            'user_id' => 3,
            'regular' => 1,
            'calificacionFinal' => 9  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 1,
            'user_id' => 4,
            'regular' => 1,
            'calificacionFinal' => 9  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 1,
            'user_id' => 5,
            'regular' => 1,
            'calificacionFinal' => 9  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 1,
            'user_id' => 6,
            'regular' => 1,
            'calificacionFinal' => 9  
        ]);
                // clase 2
        DB::table('estudiantes')->insert([
            'clase_id' => 2,
            'user_id' => 1,
            'regular' => 1,
            'calificacionFinal' => 9,  
            
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 2,
            'user_id' => 2,
            'regular' => 1,
            'calificacionFinal' => 9,    
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 2,
            'user_id' => 3,
            'regular' => 1,
            'calificacionFinal' => 9,    
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 2,
            'user_id' => 4,
            'regular' => 1,
            'calificacionFinal' => 9,    
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 2,
            'user_id' => 5,
            'regular' => 1,
            'calificacionFinal' => 9,    
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 2,
            'user_id' => 6,
            'regular' => 1,
            'calificacionFinal' => 9,    
        ]);
        // clase 3
        DB::table('estudiantes')->insert([
            'clase_id' => 3,
            'user_id' => 1,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 3,
            'user_id' => 2,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 3,
            'user_id' => 3,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 3,
            'user_id' => 4,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 3,
            'user_id' => 5,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 3,
            'user_id' => 6,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        // Clase 4 del 2022
        DB::table('estudiantes')->insert([
            'clase_id' => 4,
            'user_id' => 1,
            'regular' => 1,
            'calificacionFinal' => 10  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 4,
            'user_id' => 2,
            'regular' => 1,
            'calificacionFinal' => 10  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 4,
            'user_id' => 3,
            'regular' => 1,
            'calificacionFinal' => 10  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 4,
            'user_id' => 4,
            'regular' => 1,
            'calificacionFinal' => 10  
        ]);

        // Clase 5
        DB::table('estudiantes')->insert([
            'clase_id' => 5,
            'user_id' => 1,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 5,
            'user_id' => 2,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 5,
            'user_id' => 3,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 5,
            'user_id' => 4,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 5,
            'user_id' => 5,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 5,
            'user_id' => 6,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        // Clase 6
        DB::table('estudiantes')->insert([
        'clase_id' => 6,
        'user_id' => 1,
        'regular' => 1,
        'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 6,
            'user_id' => 2,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 6,
            'user_id' => 3,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 6,
            'user_id' => 4,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 6,
            'user_id' => 5,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 6,
            'user_id' => 6,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        // Clase 7

        DB::table('estudiantes')->insert([
        'clase_id' => 7,
        'user_id' => 1,
        'regular' => 1,
        'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 7,
            'user_id' => 2,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 7,
            'user_id' => 3,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 7,
            'user_id' => 4,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 7,
            'user_id' => 5,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 7,
            'user_id' => 6,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);


        // clase 8

        DB::table('estudiantes')->insert([
            'clase_id' => 8,
            'user_id' => 1,
            'regular' => 1,
            'calificacionFinal' => 7,  
            ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 8,
            'user_id' => 2,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 8,
            'user_id' => 3,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 8,
            'user_id' => 4,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 8,
            'user_id' => 5,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);
        DB::table('estudiantes')->insert([
            'clase_id' => 8,
            'user_id' => 6,
            'regular' => 1,
            'calificacionFinal' => 7,  
        ]);

        // Clase 9

        DB::table('estudiantes')->insert([
            'clase_id' => 9,
            'user_id' => 1,
            'regular' => 1,
            'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 9,
                'user_id' => 2,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 9,
                'user_id' => 3,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 9,
                'user_id' => 4,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 9,
                'user_id' => 5,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 9,
                'user_id' => 6,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);

        // Clase 10

        DB::table('estudiantes')->insert([
            'clase_id' => 10,
            'user_id' => 1,
            'regular' => 1,
            'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 10,
                'user_id' => 2,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 10,
                'user_id' => 3,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 10,
                'user_id' => 4,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 10,
                'user_id' => 5,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 10,
                'user_id' => 6,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);

        // Clase 11

        DB::table('estudiantes')->insert([
            'clase_id' => 11,
            'user_id' => 1,
            'regular' => 1,
            'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 11,
                'user_id' => 2,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 11,
                'user_id' => 3,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 11,
                'user_id' => 4,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 11,
                'user_id' => 5,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 11,
                'user_id' => 6,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);

        // Clase 12

        DB::table('estudiantes')->insert([
            'clase_id' => 12,
            'user_id' => 1,
            'regular' => 1,
            'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 12,
                'user_id' => 2,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 12,
                'user_id' => 3,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 12,
                'user_id' => 4,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 12,
                'user_id' => 5,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 12,
                'user_id' => 6,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);

        // Clase 13

        DB::table('estudiantes')->insert([
            'clase_id' => 13,
            'user_id' => 1,
            'regular' => 1,
            'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 13,
                'user_id' => 2,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 13,
                'user_id' => 3,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 13,
                'user_id' => 4,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 13,
                'user_id' => 5,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 13,
                'user_id' => 6,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);

        // Clase 14

        DB::table('estudiantes')->insert([
            'clase_id' => 14,
            'user_id' => 1,
            'regular' => 1,
            'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 14,
                'user_id' => 2,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 14,
                'user_id' => 3,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 14,
                'user_id' => 4,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 14,
                'user_id' => 5,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 14,
                'user_id' => 6,
                'regular' => 1,
                'calificacionFinal' => 7,  
            ]);
            // 
            // solo el estudiante 1
            DB::table('estudiantes')->insert([
                'clase_id' => 15,
                'user_id' => 1,
                'regular' => 1,
                'calificacionFinal' => 9  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 16,
                'user_id' => 1,
                'regular' => 1,
                'calificacionFinal' => 9  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 17,
                'user_id' => 1,
                'regular' => 1,
                'calificacionFinal' => 9  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 18,
                'user_id' => 1,
                'regular' => 1,
                'calificacionFinal' => 9  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 19,
                'user_id' => 1,
                'regular' => 1,
                'calificacionFinal' => 9  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 20,
                'user_id' => 1,
                'regular' => 1,
                'calificacionFinal' => 9  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 21,
                'user_id' => 1,
                'regular' => 1,
                'calificacionFinal' => 9  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 22,
                'user_id' => 1,
                'regular' => 1,
                'calificacionFinal' => 9  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 23,
                'user_id' => 1,
                'regular' => 1,
                'calificacionFinal' => 9  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 24,
                'user_id' => 1,
                'regular' => 1,
                'calificacionFinal' => 9  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 25,
                'user_id' => 1,
                'regular' => 1,
                'calificacionFinal' => 9  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 26,
                'user_id' => 1,
                'regular' => 1,
                'calificacionFinal' => 9  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 27,
                'user_id' => 1,
                'regular' => 1,
                'calificacionFinal' => 9  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 28,
                'user_id' => 1,
                'regular' => 1,
                'calificacionFinal' => 9  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 29,
                'user_id' => 1,
                'regular' => 1,
                'calificacionFinal' => 9  
            ]);
            DB::table('estudiantes')->insert([
                'clase_id' => 30,
                'user_id' => 1,
                'regular' => 1,
                'calificacionFinal' => 9  
            ]);

    }
}
