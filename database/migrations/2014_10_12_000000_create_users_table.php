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
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('idade');
            $table->integer('setor');
            $table->string('telefone')->nullable();
            $table->string('ano_escolar');
            $table->longText('sobre_lideranca');
            $table->string('ministerio_exerce');
            $table->string('ministerio_identifica')->nullable();
            $table->string('oportunidade_culto');
            $table->string('oportunidade_descrita')->nullable();
            $table->string('profissao');
            $table->string('participacao_programacoes');
            $table->string('segue_redes_sociais');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form');
    }
};
