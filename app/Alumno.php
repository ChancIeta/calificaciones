<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\ProgresoSemestral;



class Alumno extends Model
{
    protected $table = "alumnos";
    
    public function user(){
        return $this->belongsTo(User::class, 'users_id');
    }
    
    public function avanceCarrera(){
//        return $this->hasMany(ProgresoSemestral::class, '');
        return $this->hasMany(ProgresoSemestral::class, 'alumno_id');
    }
}
