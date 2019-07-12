<?php

namespace App\Http\Controllers;

use App\cliente;
use App\trans;
use App\tipos;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaginasController extends Controller
{


    public function __construct(){
        $this->middleware('auth',['except' =>['index','about','areageral','areacliente']]);
    }
    public function index(){
        return view('principal');
    }
    public function about(){
        return view('welcome');
    }
    public function areageral(){
        return view('areageral');
    }
    public function areacliente(){

        $tran = trans::orderby('id')->get();
        $cliente = cliente::orderby('nome')->get();
        // View -> apresentar da    public function __construct(){
        //        $this->middleware('auth');
        //    }
        //    dos
        return view('areacliente',[$tran,'tran'])->with('cliente',$cliente);
    }

    public function areaadm(){

        $User = Auth::user();
        if($User->tipo == "1") {

            $tipo = cliente::orderby('nome')->get();
            $cliente = cliente::orderby('nome')->get();
            // View -> apresentar dados
            return view('areaadm', [$tipo, 'tipo'], [$User, 'User'])->with('cliente', $cliente);
        }else{
            session()->flash('mensagem','Administrador necessario!');
            return redirect()->route('home');
//            return view('principal');
//            session()->flash('mensagem','Administrador necessario!');
        }
    }
}
