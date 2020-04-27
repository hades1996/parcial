<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMatriculasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('matricula');
            $table->integer('cc_dueño');
            $table->integer('marca')->unsigned();
            $table->integer('modelo')->unsigned();
            $table->timestamps();
            $table->foreign('marca')->references('id')->on('marcas');
            $table->foreign('modelo')->references('id')->on('modelos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('matriculas');
    }
}
