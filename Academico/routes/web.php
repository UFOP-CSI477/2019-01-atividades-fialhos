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

//Route::get('/', function () {
//
//    $nome ="Vinicius" ;
//    $usuario ="Fialho";
//    $alunos= ['Ana','Maria','Joao','Ronaldo'];
//    return view ("principal")
//        ->with('nome', $nome)
//        ->with('user',$usuario)
//        ->with('alunos',$alunos);
//
//});

Route :: get('/', 'PaginasController@index' );

Route :: get('/welcome','PaginasController@about');

Route :: get('/alunos/lista','PaginasController@listar');

Route :: resource('/estados', 'EstadoController');

Route :: resource('/regioes', 'RegioesController');

Route :: resource('/cidades', 'CidadeController');

Route :: resource('/alunos', 'AlunosController');

//Route ::get('/welcome',function(){
//
//    return view('welcome');
//
//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
