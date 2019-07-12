@extends('layouts.app')

@section('titulo','Exibir Estado')

@section('content')

    <h1>cliente: {{$tran->id}}</h1>
    <p>cliente: {{$tran->cliente_id}}</p>
    <p>tipo: {{$tran->tipo_id}}</p>
    <p>data: {{$tran->data}}</p>
    <p>valor: {{$tran->valor}}</p>
    <p>credito: {{$tran->credito}}</p>


    {{-- voltar para a lista de estados --}}

    <a href={{route ('trans.index')}}>Voltar</a>

    {{-- Editar o estado corrente --}}

    <a href={{route ('trans.edit', $tran->id)}}>Editar</a>

    {{-- Excluir o estado corrente --}}

    <form method="post" action="{{route ('trans.destroy',$tran->id)}}" onsubmit="return confirm('Confirmar exclusão');">

        @csrf
        @method('DELETE')

        <input type="submit" value ="excluir">

    </form>

@endsection
