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


Route::get('/example/hola','ExampleController@main');

Route::get('/example/login','ExampleController@dobleMain');

Auth::routes();
//login
//logout
//register

//old/password
//new/password

//Route::group([ 'middleware' => ['auth'], 'prefix' => 'student', 'as'=>'student.' ], function () {
Route::group([ 'middleware' => ['auth']], function () {
   
    //compras
    //compras/nueva
    //compras/editar/
    //compras/eliminar
    //
   
    Route::get('/', 'Dashboards\MainController@index')->name('dashboard');


});
