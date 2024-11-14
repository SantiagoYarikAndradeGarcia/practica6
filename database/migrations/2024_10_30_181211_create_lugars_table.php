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
        Schema::create('lugars', function (Blueprint $table) {
            $table->id();
            $table->string('nombreLugar', 25)->unique();
            $table->string("nombreCorto", 5);
            $table->unsignedBigInteger('edificio_id');
            //$table->string('edificio_id', 4);
            $table->foreign('edificio_id')
                ->references('id')
                ->on('edificios')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lugars');
    }
};
