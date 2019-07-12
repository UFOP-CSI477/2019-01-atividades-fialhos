<?php

namespace App\Http\Controllers;

use App\cliente;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{

//    public function __construct(){
//        $this->middleware('auth');
//    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        $User = Auth::user();
        $cliente = cliente::orderby('nome')->get();
        // View -> apresentar dados
        return view('cliente.index')->with('cliente',$cliente);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
//        $User = Auth::user();
//        if($User->tipo == 1) {
            return view('cliente.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        cliente::create($request->all());

        //Mensagem de sucesso
        // -- Flash
        // mensagem -> campo

        session()->flash('mensagem','cliente inserida com sucesso !');

        //return redirect('/estados');
        return redirect()->route ('cliente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        //
        return view('cliente.show')->with('cliente',$cliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(cliente $cliente)
    {
        //
        return view('cliente.edit')->with('cliente',$cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cliente $cliente)
    {
        //
        $cliente->fill($request->all());

        $cliente->save();

        session()->flash('mensagem','cliente atualizado com sucesso!');

        return redirect()->route('cliente.show',$cliente->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliente $cliente)
    {
        //
        $cliente->delete();

        session()->flash('mensagem','Aluno excluido com sucesso!!');

        return redirect()->route('cliente.index');
    }
}
