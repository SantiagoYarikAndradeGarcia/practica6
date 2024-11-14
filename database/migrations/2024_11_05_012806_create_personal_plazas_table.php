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
        Schema::create('personal_plazas', function (Blueprint $table) {
            $table->id();
            $table->smallInteger("tipoNombramiento");
            $table->unsignedBigInteger('plaza_id');
            // $table->string('plaza_id ', 25);
            $table->foreign('plaza_id')
                ->references('id')
                ->on('plazas')
                ->onDelete('cascade');
            $table->unsignedBigInteger('personal_id');
            // $table->string('personal_rfc', 13);
            $table->foreign('personal_id')
                ->references('id')
                ->on('personals')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_plazas');
    }
};
