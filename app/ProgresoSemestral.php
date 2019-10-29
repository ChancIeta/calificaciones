<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgresoSemestral extends Model
{
    
    /*
    public function up()
    {
        Schema::create('avance_carera', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            //Asignatura padre, del cual esta seriada la materia
            $table->unsignedBigInteger('plan_estudios_id');
            //Asignatura seriada
            $table->unsignedBigInteger('asignatura_id');
            //Asignatura seriada
            $table->unsignedBigInteger('alumno_id');
            $table->unsignedBigInteger('maestro_id');
            $table->enum('estatus',['cursando','aprovada','reprobada','sin cursar']);

            $table->foreign('plan_estudios_id')->references('id')->on('plan_estudios');
            $table->foreign('asignatura_id')->references('id')->on('asignaturas');
            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('maestro_id')->references('id')->on('maestros');
            $table->timestamps();
        });
    }
     */
    
    protected $table = "avance_carera";
    
    
}
