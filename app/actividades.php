<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actividades extends Model
{
    //

    public function proyectos()
    {
      return $this->belongsTo(proyectos::class);
    }
}
