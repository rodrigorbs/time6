<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Campus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('campuses', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nomeCampus')->nullable();
          $table->string('logradouro')->nullable();
          $table->string('cidade')->nullable();
          $table->string('cep')->nullable();
          $table->string('uf')->nullable();
          $table->string('telefone')->nullable();
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
        //
    }
}
