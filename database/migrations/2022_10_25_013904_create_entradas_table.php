<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entradas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('slug');
            $table->string('precio');
            $table->timestamps();

            $table->unsignedBigInteger('peliculas_id');
            $table->foreign('peliculas_id')->references('id')->on('peliculas');

            $table->unsignedBigInteger('beneficios_id');
            $table->foreign('beneficios_id')->references('id')->on('beneficios');

            $table->unsignedBigInteger('combos_id');
            $table->foreign('combos_id')->references('id')->on('combos');
            
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
          
            $table->unsignedBigInteger('codigos_id');
            $table->foreign('codigos_id')->references('id')->on('codigos'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entradas');
    }
};
