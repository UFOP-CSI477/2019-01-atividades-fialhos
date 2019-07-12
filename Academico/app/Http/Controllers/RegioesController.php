<?php

namespace App\Http\Controllers;

use App\regioes;
use Illuminate\Http\Request;

class RegioesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $regio = regioes::all();
        // View -> apresentar dados
        return view('regioes.index')->with('regioes',$regio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('regioes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        regioes::create($request->all());

        //Mensagem de sucesso
        // -- Flash
        // mensagem -> campo

        session()->flash('mensagem','Estado inserido com sucesso !');

        //return redirect('/estados');
        return redirect()->route ('regioes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\regioes  $regioes
     * @return \Illuminate\Http\Response
     */
    public function show(regioes $regio)
    {
        //
        return view('regioes.show')->with('regioes',$regio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\regioes  $regioes
     * @return \Illuminate\Http\Response
     */
    public function edit(regioes $regio)
    {
        //
        return view('regioes.edit')->with('regioes',$regio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\regioes  $regioes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, regioes $regio)
    {
        //
        $regio->fill($request->all());

        $regio->save();

        session()->flash('mensagem','Estado atualizado com sucesso!');

        return redirect()->route('regioes.show',$regio->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\regioes  $regioes
     * @return \Illuminate\Http\Response
     */
    public function destroy(regioes $regio)
    {
        //
        $regio->delete();

        session()->flash('mensagem','estado excluido com sucesso!!');

        return redirect()->route('regioes.index');
    }
}
