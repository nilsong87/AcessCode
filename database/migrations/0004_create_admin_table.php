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
        Schema::create('admin', function (Blueprint $table) {
            $table->id('idAdmin');
            $table->string('nome', 50);
            $table->primary('idAdmin');

            $table->unsignedbigInteger('User_id');

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
        Schema::dropIfExists('admin');
    }
};