<?php

namespace App\Http\Controllers;

use App\trans;
use App\cliente;
use App\tipos;
use Illuminate\Http\Request;

class TransController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tran = trans::all();
        $tipo = tipos::orderby('nome')->get();
        $cliente = cliente::all();
        // View -> apresentar dados
        return view('trans.index',['cliente'=>$cliente],['tipo'=>$tipo])->with('tran',$tran);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tipo = tipos::all();
        $cliente = cliente::all();
        return view('trans.create',['cliente'=>$cliente],['tipo'=>$tipo]);


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
        $tran = trans::all();
        trans::create($request->all());

        //Mensagem de sucesso
        // -- Flash
        // mensagem -> campo

        session()->flash('mensagem','tran inserida com sucesso !');

        //return redirect('/estados');
        return redirect()->route('trans.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tran  $tran
     * @return \Illuminate\Http\Response
     */
    public function show(trans $tran)
    {
        //

        $tipo = tipos::all();
        $cliente = cliente::all();
        return view('trans.show',['cliente'=>$cliente],['tipo'=>$tipo])->with('tran',$tran);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tran  $tran
     * @return \Illuminate\Http\Response
     */
    public function edit(trans $tran)
    {
        //
        $tipo = tipos::all();
        $cliente = cliente::all();
        return view('trans.edit',['cliente'=>$cliente],['tipo'=>$tipo])->with('tran',$tran);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tran  $tran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, trans $tran)
    {
        //
        $tran->fill($request->all());

        session()->flash('mensagem','tran atualizado com sucesso!');

        return redirect()->route('trans.show',$tran->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tran  $tran
     * @return \Illuminate\Http\Response
     */
    public function destroy(trans $tran)
    {
        //
        $tran->delete();
        session()->flash('mensagem','Aluno excluido com sucesso!!');

        return redirect()->route('trans.index');
    }

    public function func(Request $request)
    {
        //
        $tipo = tipos::all();
        $data = trans::where('cliente_id',$request->cliente_id)->orderby('data')->get();
        return view('trans.exibe',['tipo'=>$tipo],['trans'=>$data,'criterio'=>$request->cliente_id]);

    }



}