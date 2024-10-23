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
        Schema::create('reticulas', function (Blueprint $table) {
            $table->string('idReticula', 15)->primary();
            $table->string("descripcion", 200);
            //$table->date("fechaEnVigor");
            $table->string("fechaEnVigor", 50);
            $table->string('carrera_id', 15);
            $table->foreign('carrera_id')
                ->references('idCarrera')
                ->on('carreras')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reticulas');
    }
};
