<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UsersController extends Controller
{
    /*
            Route::get('/','UsersController@index')->name('index');
            Route::get('create','UsersController@create')->name('create');
            Route::post('create','UsersController@store')->name('create');
            Route::get('edit/{id}','UsersController@edit')->name('create');
            Route::post('edit/{id}','UsersController@Update')->name('create');

     * */
    public function index(){
        $users = User::paginate(10);
        return view('admin.users', compact('users'));

    }
    public function create(){

    }
    public function store(){

    }
    public function edit(){

    }
    public function update(){

    }
}
