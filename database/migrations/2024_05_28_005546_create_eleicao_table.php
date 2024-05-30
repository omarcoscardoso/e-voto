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
        Schema::create('eleicao', function (Blueprint $table) {
            $table->id('id_eleicao');
            $table->foreignId('id_assembleia')->references('id_assembleia')->on('assembleias');
            $table->string('nome_oficio');
            $table->integer('qt_vagas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eleicao');
    }
};
