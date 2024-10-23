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
        Schema::create('materias', function (Blueprint $table) {
            $table->string('idMateria',10)->primary();
            $table->string('nombreMateria',200)->unique();
            $table->string('nombreMediano',25);
            $table->string('nombreCorto',10);
            $table->string('nivel', 1);
            $table->string('modalidad', 1);
            $table->string('reticula_id', 15);
            $table->foreign('reticula_id')
                ->references('idReticula')
                ->on('reticulas')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};
