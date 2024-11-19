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

        Schema::create('pecas', function (Blueprint $table) {

            $table->id('idPecas');

            $table->integer('pecas');

            $table->text('img_pecas');

            $table->primary('idPecas');

        });

    }
 
    /**

     * Reverse the migrations.

     *

     * @return void

     */

    public function down()

    {

        Schema::dropIfExists('pecas');

    }

};