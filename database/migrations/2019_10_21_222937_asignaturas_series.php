<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AsignaturasSeries extends Migration
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
            $table->unsignedInteger('asignaturas_id_seriada_de');
            //Asignatura seriada
            $table->unsignedInteger('asignaturas_id_seriada');

            /*
            *foreign keys 
            */
            $table->foreign('asignaturas_id_seriada_de')->references('id')->on('asignaturas');
            $table->foreign('asignaturas_id_seriada')->references('id')->on('asignaturas');
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
