<?php

namespace App\Http\Controllers;

use App\alunos;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alunos = alunos::all();
        // View -> apresentar dados
        return view('alunos.index')->with('alunos',$alunos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('alunos.create');
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
        alunos::create($request->all());

        //Mensagem de sucesso
        // -- Flash
        // mensagem -> campo

        session()->flash('mensagem','Cidade inserida com sucesso !');

        //return redirect('/estados');
        return redirect()->route ('alunos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function show(alunos $aluno)
    {
        //
        return view('alunos.show')->with('alunos',$aluno);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function edit(alunos $aluno)
    {
        //
        return view('alunos.edit')->with('alunos',$aluno);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, alunos $aluno)
    {
        //
        $aluno->fill($request->all());

        $aluno->save();

        session()->flash('mensagem','Aluno atualizado com sucesso!');

        return redirect()->route('alunos.show',$aluno->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function destroy(alunos $aluno)
    {
        //
        $aluno->delete();

        session()->flash('mensagem','Aluno excluido com sucesso!!');

        return redirect()->route('alunos.index');
    }
}
