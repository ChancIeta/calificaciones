<?php

namespace App\Http\Controllers;

use App\Asignaturas;
use Illuminate\Http\Request;
use App\ProgresoSemestral;

use Illuminate\Support\Facades\Auth;

class EvaluationController extends Controller
{
    public function view(Request $request){
        $maestro_id = Auth::user()->profesor()->first()->id;
        $actual = ProgresoSemestral::where('maestro_id',$maestro_id)->groupBy('asignatura_id')->paginate(15);
        return view('profesor.asignaturas',compact('actual'));
    }

    public function evaluationView(Request $request, $id){
        $maestro_id = Auth::user()->profesor()->first()->id;
        $actual = ProgresoSemestral::where('maestro_id',$maestro_id)->where('asignatura_id',$id)->paginate(15);
        $materia = Asignaturas::find($id);
        return view('profesor.calificaciones.registro_calificaciones',compact('actual','materia'));
    }
}
