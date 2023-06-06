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
        Schema::create('discos', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->timestamps();
            $table->string("name");
            $table->string("titulo");
            $table->unsignedBigInteger("estilo_id");
            $table->integer("qtd");
            $table->foreign("estilo_id")->references("id")->on("estilos");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discos');
    }
};
