<?php

namespace App\Http\Controllers;

use App\tipos;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;

class TiposController extends Controller
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
        $tipo = tipos::orderby('nome')->get();
        // View -> apresentar dados
        return view('tipo.index')->with('tipo',$tipo);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tipo.create');
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
        tipos::create($request->all());

        //Mensagem de sucesso
        // -- Flash
        // mensagem -> campo

        session()->flash('mensagem','tipo inserida com sucesso !');

        //return redirect('/estados');
        return redirect()->route ('tipo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(tipos $tipo)
    {
        //
        return view('tipo.show')->with('tipo',$tipo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function edit(tipos $tipo)
    {
        //
        return view('tipo.edit')->with('tipo',$tipo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipos $tipo)
    {
        //
        $tipo->fill($request->all());

        $tipo->save();

        session()->flash('mensagem','tipo atualizado com sucesso!');

        return redirect()->route('tipo.show',$tipo->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipos $tipo)
    {
        //
        $tipo->delete();

        session()->flash('mensagem','Aluno excluido com sucesso!!');

        return redirect()->route('tipo.index');
    }


}
