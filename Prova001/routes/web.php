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

Route :: get('/areageral','PaginasController@areageral');

Route :: get('/areacliente','PaginasController@areacliente');

Route :: get('/areaadm','PaginasController@areaadm');

Route :: post('/func', 'TransController@func')->name('func');

Route :: resource('/cliente', 'ClienteController');

Route :: resource('/tipo', 'TiposController');

Route :: resource('/trans', 'TransController');

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
