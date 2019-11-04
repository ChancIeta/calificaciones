<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alumno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('semestre');
            
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('carreras_id');
            /*
             * foreign keys 
             */
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('carreras_id')->references('id')->on('carreras');
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
