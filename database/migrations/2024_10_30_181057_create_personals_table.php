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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string("RFC", 13);
            $table->string("nombres", 50);
            $table->string("apellidoP", 50);
            $table->string("apellidoM", 50);
            $table->string("licenciatura", 200)->nullable();
            $table->tinyInteger("licPasTit");
            $table->string("especializacion", 200)->nullable();
            $table->tinyInteger("espPasTit");
            $table->string("maestria", 200)->nullable();
            $table->tinyInteger("maePasTit");
            $table->string("doctorado", 200)->nullable();
            $table->tinyInteger("docPasTit");
            $table->date("fechaIngSep");
            $table->date("fechaIngIns");
            $table->unsignedBigInteger('depto_id');
            // $table->string('depto_id', 2);
            $table->foreign('depto_id')
                ->references('id')
                ->on('deptos')
                ->onDelete('cascade');  
            $table->unsignedBigInteger('puesto_id');
            // $table->string('puesto_id', 10);
            $table->foreign('puesto_id')
                ->references('id')
                ->on('puestos')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
