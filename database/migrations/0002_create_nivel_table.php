<?php
 

 use Illuminate\Database\Migrations\Migration;
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Support\Facades\Schema;
 
 return new class extends Migration
 {

    public function up()

    {

        Schema::create('nivel', function (Blueprint $table) {

            $table->id('idNivel');
            $table->integer('nivel');
            $table->primary('idNivel');

        });

    }

    public function down()
    {
        Schema::dropIfExists('nivel');

    }

};