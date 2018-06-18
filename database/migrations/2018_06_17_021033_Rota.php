<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('rotas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('destino')->nullable();
          $table->string('orientacao')->nullable();
          $table->integer('rota_idCampus');
          $table->integer('rota_salaIdBlocos');
          $table->integer('rota_idSala');
          $table->timestamps();

      });
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rotas');
    }
}
