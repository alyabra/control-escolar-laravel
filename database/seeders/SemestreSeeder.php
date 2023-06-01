<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SemestreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('semestres')->insert([
            'fecha_inicio' => '2021-01-06',
            'fecha_fin' => '2021-06-06',
        ]);
        DB::table('semestres')->insert([
            'fecha_inicio' => '2021-06-06',
            'fecha_fin' => '2022-01-06',
        ]);
        DB::table('semestres')->insert([
            'fecha_inicio' => '2022-01-06',
            'fecha_fin' => '2022-06-06',
        ]);
        DB::table('semestres')->insert([
            'fecha_inicio' => '2022-06-06',
            'fecha_fin' => '2023-01-06',
        ]);
        DB::table('semestres')->insert([
            'fecha_inicio' => '2023-01-06',
            'fecha_fin' => '2023-06-06',
        ]);
        DB::table('semestres')->insert([
            'fecha_inicio' => '2023-06-06',
            'fecha_fin' => '2024-01-06',
        ]);
    }
}
