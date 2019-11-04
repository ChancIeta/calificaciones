<?php

namespace App;

use App\Asignaturas;
use App\Alumno;
use Illuminate\Database\Eloquent\Model;
class ProgresoSemestral extends Model
{

    protected $table = "progreso_cursado";

    public function asignatura(){
        return $this->belongsTo(Asignaturas::class, 'asignatura_id' );
    }

    public function alumno(){
        return $this->belongsTo(Alumno::class, 'alumno_id' );
    }


}
