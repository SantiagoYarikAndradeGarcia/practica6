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
        Schema::create('deptos', function (Blueprint $table) {
            $table->id();
            $table->string('idDepto',2)->unique();
            //$table->string('idDepto',2)->primary();
            $table->string('nombreDepto',100)->unique();
            $table->string('nombreMediano',15)->unique();
            $table->string('nombreCorto',5)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deptos');
    }
};
