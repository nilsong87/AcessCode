<?php
 
 use Illuminate\Database\Migrations\Migration;
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Support\Facades\Schema;
 
 class CreateFilesTable extends Migration
 {
     /**
      * Run the migrations.
      *
      * @return void
      */
     public function up()
     {
         Schema::create('files', function (Blueprint $table) {
             $table->id();
             $table->string('path'); // Caminho para o arquivo armazenado
             $table->string('description'); // Descrição do arquivo
             $table->integer('level'); // Nível do arquivo
             $table->timestamps(); // Timestamps de criação e atualização
         });
     }
 
     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('files');
     }
 }
 