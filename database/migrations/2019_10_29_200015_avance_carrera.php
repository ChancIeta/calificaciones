<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AvanceCarrera extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progreso_cursado', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            //Asignatura padre, del cual esta seriada la materia
            $table->unsignedBigInteger('plan_estudios_id');
            //Asignatura seriada
            $table->unsignedBigInteger('asignatura_id');
            //Asignatura seriada
            $table->unsignedBigInteger('alumno_id');
            $table->unsignedBigInteger('maestro_id');
            $table->enum('estatus',['cursando','aprovada','reprobada','sin cursar']);
            /*
            *foreign keys 
            */
            $table->foreign('plan_estudios_id')->references('id')->on('plan_estudios');
            $table->foreign('asignatura_id')->references('id')->on('asignaturas');
            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('maestro_id')->references('id')->on('maestros');
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
