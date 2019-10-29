<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlanEstudios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaturas_series', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            //Asignatura padre, del cual esta seriada la materia
            $table->unsignedInteger('carrera_id');
            //Asignatura seriada
            $table->unsignedInteger('asignaturas_id');
            $table->string('semestre');

            /*
            *foreign keys 
            */
            $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->foreign('asignatura_id')->references('id')->on('asignaturas');
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
