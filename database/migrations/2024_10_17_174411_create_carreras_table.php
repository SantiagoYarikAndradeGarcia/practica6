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
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();
            $table->string('idCarrera',15)->unique();
            //$table->string('idCarrera',15)->primary();
            $table->string('nombreCarrera',200)->unique();
            $table->string('nombreMediano',50)->unique();
            $table->string('nombreCorto',5)->unique();
            $table->unsignedBigInteger('depto_id');
            //$table->string('depto_id', 2);
            $table->foreign('depto_id')
                ->references('id')
                ->on('deptos')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('carreras');
    }
};
