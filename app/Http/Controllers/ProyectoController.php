<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
//oculta pestaña oara usuarios no logeados

public function __construct()
{
  $this->middleware('auth');
}



    //regresa la vista
    public function create()
    {
      return view('proyectos.create');
    }

//guarda los datos para despues insertarlos en DB
        public function store()
        {
          $data=request()->validate([
            'title'=>'required',
            'description'=>'required',
          ]);
//toma al usuario logeado y lo inserta junto a la demas informacion
          auth()->user()->proyectos()->create($data);

          return redirect('/profile/'. auth()->user()->id);

        }

        public function show(\App\proyectos $proyecto)
        {
          return view('proyectos.Actividades',compact('proyecto'));
        }



}
