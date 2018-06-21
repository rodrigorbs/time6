<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRotasTable extends Migration
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
           $table->string('origem')->nullable();
           $table->string('destino')->nullable();
           $table->string('orientacao')->nullable();
           $table->integer('rota_idCampus_destino');
           $table->integer('rota_IdBlocos_destino');
           $table->integer('rota_idSala_origem');
           $table->integer('rota_idSala_destino');
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
