<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('listaAlumnos', function (Blueprint $table) {
            $table->foreignId('clase_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('listaAlumnos', function (Blueprint $table) {
            //
            $table->dropForeign('lista_alumnos_clase_id_foreign');
            $table->dropColumn(['clase_id']);
        });
    }
};
