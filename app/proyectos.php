<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proyectos extends Model
{
    //
    protected $guarded=[];
    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function actividades()
    {
      return $this->hasMany(actividades::class);
    }
}
