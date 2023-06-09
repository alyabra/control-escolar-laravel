<?php

namespace Database\Seeders;

use App\Models\Aviso;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AvisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        DB::table('avisos')->insert([
            'titulo' => 'Aviso 1' ,
            'contenido' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'created_at' => now()
        ]);
        DB::table('avisos')->insert([
            'titulo' => 'Aviso 2' ,
            'contenido' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'created_at' => now()
        ]);
        DB::table('avisos')->insert([
            'titulo' => 'Aviso 3' ,
            'contenido' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'created_at' => now()
        ]);
        DB::table('avisos')->insert([
            'titulo' => 'Aviso 4' ,
            'contenido' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'created_at' => now()
        ]);       
        DB::table('avisos')->insert([
            'titulo' => 'Aviso 5' ,
            'contenido' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'created_at' => now()
        ]);
        DB::table('avisos')->insert([
            'titulo' => 'Aviso 6' ,
            'contenido' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'created_at' => now()
        ]);       
        DB::table('avisos')->insert([
            'titulo' => 'Aviso 7' ,
            'contenido' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'created_at' => now()
        ]);
        DB::table('avisos')->insert([
            'titulo' => 'Aviso 8' ,
            'contenido' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'created_at' => now()
        ]);       
        DB::table('avisos')->insert([
            'titulo' => 'Aviso 9' ,
            'contenido' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'created_at' => now()
        ]);
        DB::table('avisos')->insert([
            'titulo' => 'Aviso 10' ,
            'contenido' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'created_at' => now()
        ]);       
        DB::table('avisos')->insert([
            'titulo' => 'Aviso 11' ,
            'contenido' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'created_at' => now()
        ]);
        DB::table('avisos')->insert([
            'titulo' => 'Aviso 12' ,
            'contenido' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'created_at' => now()
        ]);       
        DB::table('avisos')->insert([
            'titulo' => 'Aviso 13' ,
            'contenido' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'created_at' => now()
        ]);
        DB::table('avisos')->insert([
            'titulo' => 'Aviso 14' ,
            'contenido' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'created_at' => now()
        ]);       
        DB::table('avisos')->insert([
            'titulo' => 'Aviso 15' ,
            'contenido' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'created_at' => now()
        ]);
        DB::table('avisos')->insert([
            'titulo' => 'Aviso 16' ,
            'contenido' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'created_at' => now()
        ]);       
        DB::table('avisos')->insert([
            'titulo' => 'Aviso 17' ,
            'contenido' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'created_at' => now()
        ]);
        DB::table('avisos')->insert([
            'titulo' => 'Aviso 8' ,
            'contenido' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'created_at' => now()
        ]);       
        DB::table('avisos')->insert([
            'titulo' => 'Aviso 19' ,
            'contenido' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'created_at' => now()
        ]);
        DB::table('avisos')->insert([
            'titulo' => 'Aviso 20' ,
            'contenido' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'created_at' => now()
        ]);       
        
    }
}
