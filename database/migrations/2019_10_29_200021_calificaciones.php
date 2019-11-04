<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Calificaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            //Asignatura padre, del cual esta seriada la materia
            $table->unsignedBigInteger('progreso_cursado_id');
            //Asignatura seriada

            $table->decimal('calificacion');
            $table->integer('unidad');

            /*
            *foreign keys 
            */
            $table->foreign('progreso_cursado_id')->references('id')->on('progreso_cursado');
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
