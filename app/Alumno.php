<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\ProgresoSemestral;
use App\Carreras;



class Alumno extends Model
{
    protected $table = "alumnos";
    
    protected $fillable = ['semestre','users_id','carreras_id'];
    
    /*
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->integer('semestre');

            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('carreras_id');
     * 
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('carreras_id')->references('id')->on('carreras');
            $table->timestamps();
        });
     */
    
    public function user(){
        return $this->belongsTo(User::class, 'users_id');
    }
    
    public function avanceCarrera(){
        return $this->hasMany(ProgresoSemestral::class, 'alumno_id');
    }
    public function carrera(){
        return $this->belongsTo(Carreras::class, 'carreras_id');
    }
}
