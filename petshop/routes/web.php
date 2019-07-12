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

Route :: get('/', 'PaginasController@index' );

Route :: get('/welcome','PaginasController@about');

Route :: get('/paciente','PaginasController@paciente');

Route :: get('/adm','PaginasController@adm');

Route :: get('/procedimentos','PaginasController@procedimentos');

Route :: resource('/procedure', 'ProcedureController');

Route :: resource('/test', 'TestController');

//
//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
