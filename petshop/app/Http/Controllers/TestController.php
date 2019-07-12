<?php

namespace App\Http\Controllers;

use App\test;
use App\User;
use App\procedure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $User = Auth::user();

        $test = test::orderby('date')->where('user_id','=',$User->id)->get();
//        $testaa = test::where('user_id','=',$User->id)->count();
        $procedure = procedure::all();
        // View -> apresentar dados
        return view('test.index',['User'=>$User],['procedure'=>$procedure])->with('test',$test);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $procedure = procedure::all();
        $User = Auth::user();
        // View -> apresentar dados
        return view('test.create',['procedure'=>$procedure],['User'=>$User]);
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
        test::create($request->all());

        //Mensagem de sucesso
        // -- Flash
        // mensagem -> campo

        session()->flash('mensagem','test inserido com sucesso !');

        //return redirect('/estados');
        return redirect()->route ('test.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(test $test)
    {
        //
        $User = Auth::user();
        $procedure = procedure::all();
        return view('test.show',['procedure'=>$procedure],['User'=>$User])->with('test',$test);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(test $test)
    {
        //
        $User = Auth::user();
        $procedure = procedure::all();
        return view('test.edit',['procedure'=>$procedure],['User'=>$User])->with('test',$test);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, test $test)
    {
        //
        $test->fill($request->all());

        $test->save();

        session()->flash('mensagem','test atualizado com sucesso!');

        return redirect()->route('test.show',$test->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(test $test)
    {
        //
        $test->delete();

        session()->flash('mensagem','test excluido com sucesso!!');

        return redirect()->route('test.index');
    }
}
