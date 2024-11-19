<?php
 
use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;
 
return new class extends Migration

{

    public function up()

    {

        Schema::create('nivel_has_pecas', function (Blueprint $table) {

            $table->unsignedBigInteger('Nivel_idNivel');

            $table->unsignedBigInteger('Pecas_idPecas');

            $table->foreign('Nivel_idNivel')->references('idNivel')->on('nivel')->onDelete('NO ACTION')->onUpdate('NO ACTION');

            $table->foreign('Pecas_idPecas')->references('idPecas')->on('pecas')->onDelete('NO ACTION')->onUpdate('NO ACTION');

        });

    }
 

    public function down()

    {

        Schema::dropIfExists('nivel_has_pecas');

    }

};