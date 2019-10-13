<?php

namespace App\Http\Controllers\Dashboards;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request){
        return view('admin.dashboard');
    }
}
