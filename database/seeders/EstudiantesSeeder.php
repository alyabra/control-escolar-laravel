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

    }
    // $table->foreignId('clase_id')->constrained()->onDelete('cascade');
    // $table->foreignId('user_id')->constrained()->onDelete('cascade');
    // $table->integer('regular');
}
