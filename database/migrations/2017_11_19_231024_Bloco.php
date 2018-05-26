<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bloco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('blocos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nomeBlocos')->nullable();
          $table->integer('qtdAndares')->nullable();
          $table->integer('campus_idCampus')->nullable();
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
      Schema::dropIfExists('blocos');
    }
}
