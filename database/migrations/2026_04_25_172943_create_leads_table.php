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
        Schema::create('leads', function (Blueprint $table) {
           $table->id();

            // DADOS PRINCIPAIS
            $table->string('name');
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('data')->nullable(); // pode evoluir pra date depois
            $table->string('price')->nullable();
            $table->string('contact')->nullable();

            //  COMPLEMENTOS
            $table->text('description')->nullable();
            $table->string('link')->nullable();

            //  INTELIGÊNCIA (diferencial do sistema)
            $table->integer('score')->default(0);
            $table->string('nivel')->default('frio'); // quente, morno, frio

            //  CONTROLE
            $table->string('fonte')->default('manual'); // manual | buscador
            $table->string('qualidade')->default('alta'); // alta | media | baixa
            $table->boolean('status')->default(true); // ativo/inativo

            //  PERFORMANCE
            $table->index(['from', 'to']);
            $table->index('status');
            $table->index('nivel');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};