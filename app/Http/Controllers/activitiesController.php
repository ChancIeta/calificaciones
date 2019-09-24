<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class activitiesController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function create()
    {
      return view('Actividades.create');
    }

     public function index()
     {
       return view('Actividades.index');
     }
    //guarda los datos para despues insertarlos en DB
          /*  public function store()
            {
              $data=request()->validate([
                'title'=>'required',
                'description'=>'required',
              ]);
    //toma al usuario logeado y lo inserta junto a la demas informacion
              auth()->user()->proyectos()->create($data);

              return redirect('/profile/'. auth()->user()->id);

            }*/


}
