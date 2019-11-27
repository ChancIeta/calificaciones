<?php

namespace App\Http\Controllers\Dashboards;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use App\Carreras;
use App\Maestro;
use App\Alumno;

class MainController extends Controller {

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        return view('admin.dashboard');
    }

    public function registerRole(Request $request) {
        $data = $request->all();
//        dd($data);
        if ($data['tipo']=="alumno") {
            $carrera = Carreras::findOrFail($data['carrera']);
            $alumno = new Alumno();
            $alumno->semestre = 1;
            $alumno->users_id = Auth::user()->id;
            $alumno->carreras_id = $data['carrera'];
            $alumno->save();
        }else{
            $maestro = new Maestro();
            $maestro->users_id = Auth::user()->id;
            $maestro->titulo = $data['titulo'];
            $maestro->save();
        }
        return redirect()->route('dashboard.index');
    }
}
