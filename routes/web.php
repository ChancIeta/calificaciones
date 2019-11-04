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
    Route::get('/', 'Dashboards\MainController@index')->name('dashboard');

    Route::post('/role', 'Dashboards\MainController@registerRole')->name('set.role');
    Route::get('/asignaturas', 'EvaluationController@view')->name('asignaturas');
    Route::get('/calificaciones/{id}', 'EvaluationController@evaluationView')->name('evaluation');

});
