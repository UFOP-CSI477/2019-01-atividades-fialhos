<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\procedure;

class PaginasController extends Controller
{
    //
    public function index(){
        return view('principal');
    }
    public function about(){
        return view('welcome');
    }

    public function paciente(){
        return view('paciente');
    }

    public function adm(){
        $User = Auth::user();
        return view('adm',['User',$User]);
    }
    public function procedimentos(){
        $procedure = procedure::all();
        return view('procedimentos',['procedure',$procedure]);
    }
}
