<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    protected $table = "maestros";
    
    protected $fillable = ['users_id','titulo'];


    public function user(){
        return $this->belongsTo(User::class, 'users_id');
    }
    
    public function avanceCarrera(){
        return $this->hasMany(ProgresoSemestral::class, 'maestro_id');
    }
}
