<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMatriServiTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matri_servi', function (Blueprint $table) {
            $table->integer('matricula')->unsigned();
            $table->integer('servicio')->unsigned();
            $table->timestamps();
            $table->foreign('matricula')->references('id')->on('matriculas');
            $table->foreign('servicio')->references('id')->on('servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('matri_servi');
    }
}
