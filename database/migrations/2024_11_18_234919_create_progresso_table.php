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

        Schema::create('progresso', function (Blueprint $table) {

            $table->id('idProgresso');

            $table->string('ordem', 45)->nullable();

            $table->unsignedBigInteger('Nivel_idNivel');

            $table->unsignedBigInteger('Pecas_idPecas');

            $table->primary('idProgresso');

            $table->unsignedbigInteger('User_id');

            $table->foreign('Nivel_idNivel')->references('idNivel')->on('nivel')->onDelete('NO ACTION')->onUpdate('NO ACTION');

            $table->foreign('Pecas_idPecas')->references('idPecas')->on('pecas')->onDelete('NO ACTION')->onUpdate('NO ACTION');

            $table->foreign('User_id')->references('id')->on('users')->onDelete('NO ACTION')->onUpdate('NO ACTION');

        });

    }
 
    /**

     * Reverse the migrations.

     *

     * @return void

     */

    public function down()

    {

        Schema::dropIfExists('progresso');

    }

};