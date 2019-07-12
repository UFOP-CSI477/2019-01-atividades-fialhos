<?php

namespace App\Http\Controllers;

use App\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstadoController extends Controller
{

    public function __construct(){
        $this->middleware('auth',['except' =>['index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Exibe todos elementos criados
    public function index()
    {
        // Model -> recuperação de dados
        $estados = Estado::orderby('nome')->get();
        // View -> apresentar dados
        return view('estados.index')->with('estados',$estados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Para criar elemento é necessario eibir formulário
    public function create()
    {
        //
//        if( Auth::user()->nome == 1);
//        Auth::user();

        if(Auth::check()) {
//            Auth::logout();
            return view('estados.create');
        }else{
            return redirect()->route('login');
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Insere no banco de dados a partir do form
    public function store(Request $request)
    {

        //dd($request->all());
        //Validação - check up nos dados a serem gravados

        //Gravação
        //return ($request->input('nome'));

        //return ($request->sigla);

        // OPÇAO 01
        //$estado = new Estado;
        //$estado->nome = $request->nome;
        //$estado->sigla = $request->sigla;
        //$estado->save();



        //OPÇAO 02
        Estado::create($request->all());

        //Mensagem de sucesso
        // -- Flash
        // mensagem -> campo

        session()->flash('mensagem','Estado inserido com sucesso !');

        //return redirect('/estados');
        return redirect()->route ('estados.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    //Usado para exibir elemento em particular
    public function show(Estado $estado)
    {
        //
        return view('estados.show')->with('estado',$estado);

    }

//    public function show($id)
//    {
//        // $id <-
//        // $estado = Estado::find(id)
//
//
//
//    }
   /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    //Mostra os elemenost do formulario para senrem editados, o update persiste(UPDATE É INVOCADO) a editaçoa e atualiza BD
    public function edit(Estado $estado)
    {
        //
        return view('estados.edit')->with('estado',$estado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    //Atualiza BD, é invocado pelo edit
    public function update(Request $request, Estado $estado)
    {

        //Validaçoes ->
        //Opçao 1
        //$estado->nome = $request->nome
        //$estado->save();

        //Opçao 2
        $estado->fill($request->all());

        $estado->save();

        session()->flash('mensagem','Estado atualizado com sucesso!');

        return redirect()->route('estados.show',$estado->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    //exclui elementos
    public function destroy(Estado $estado)
    {
        //Validaçoes
        // -- Chave estrangeira

        //Excluir estado


        $estado->delete();

        session()->flash('mensagem','estado excluido com sucesso!!');

        return redirect()->route('estados.index');

    }
}
