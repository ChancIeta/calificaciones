<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return redirect()->route('login');
});

//use App\User;
//Route::get('/sss', function () {
//    return User::count();
//});


Route::get('/u/create','users@ver')->name('createUsers');
Route::post('/u','users@store');

Auth::routes();
//login
//logout
//register

//old/password
//new/password

//Route::group([ 'middleware' => ['auth'], 'prefix' => 'student', 'as'=>'student.' ], function () {
Route::group([ 'middleware' => ['auth'], 'prefix' => 'dashboard'], function () {

    Route::post('/role', 'Dashboards\MainController@registerRole')->name('set.role');


});
Route::group([ 'middleware' => ['auth'], 'prefix' => 'dashboard','as'=>'dashboard.'], function () {
    Route::get('/', 'Dashboards\MainController@index')->name('index');


    Route::get('/asignaturas', 'EvaluationController@view')->name('asignaturas');
    Route::get('/calificaciones/{id}', 'EvaluationController@evaluationView')->name('evaluation');

    //Rutas del administrador (SOLO EL ADMINISTRADOR (ROL igual a 1)) puede acceder
    Route::group([ 'middleware' => ['admin']], function () {

        //Rutas del CRUD de usuarios
        Route::group([ 'prefix' => 'users','as'=>'users.' ], function () {
            //Lista de usuarios
            Route::get('/','UsersController@index')->name('index');

            //Seccion para crear, el GET muestra el formualrio
            Route::get('create','UsersController@create')->name('create');
            //Seccion para crear, el POST crea el usuario y redirigue a la lista de usuarios
            Route::post('create','UsersController@store')->name('create');

            //Seccion para editar el GET muestra el formualrio
            Route::get('edit/{id}','UsersController@edit')->name('edit');
            //Seccion para editar el POST guarda
            Route::post('edit/{id}','UsersController@update')->name('edit');


        });


    });




});
