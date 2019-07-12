<?php

namespace App\Http\Controllers;

use App\procedure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Integer;

class ProcedureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }


    public function index()
    {
        //
        $User = Auth::user();
        $procedure = procedure::orderby('nome')->get();
        // View -> apresentar dados
        return view('procedure.index',['User'=>$User])->with('procedure',$procedure);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $User = Auth::user();
        return view('procedure.create',['User'=>$User]);
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

        procedure::create($request->all());

        //Mensagem de sucesso
        // -- Flash
        // mensagem -> campo

        session()->flash('mensagem','procedure inserido com sucesso !');

        //return redirect('/estados');
        return redirect()->route ('procedure.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function show(procedure $procedure)
    {
        //

        $User = Auth::user();
        return view('procedure.show',['User'=>$User])->with('procedure',$procedure);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function edit(procedure $procedure)
    {
        //
        $User = Auth::user();
        return view('procedure.edit',['User'=>$User])->with('procedure',$procedure);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, procedure $procedure)
    {
        //
        $procedure->fill($request->all());

        $procedure->save();

        session()->flash('mensagem','procedure atualizado com sucesso!');

        return redirect()->route('procedure.show',$procedure->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function destroy(procedure $procedure)
    {
        //
        $procedure->delete();

        session()->flash('mensagem','procedure excluido com sucesso!!');

        return redirect()->route('procedure.index');
    }
}