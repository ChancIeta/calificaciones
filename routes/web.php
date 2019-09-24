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
    return view('welcome');
});

Auth::routes();


Route::get('/p/create','ProyectoController@create')->name('createProyect');
Route::post ('/p','ProyectoController@store');

Route::get('/a/create','activitiesController@create')->name('createActivitie');

Route::get('/actividad','activitiesController@index')->name('Actividad.show');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

Route::get('/Actividades/{proyecto}','ProyectoController@show')->name('actividades.show');
                        /*/{proyecto}*/
