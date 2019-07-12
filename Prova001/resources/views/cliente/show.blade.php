@extends('layouts.app')

@section('titulo','Exibir Estado')

@section('content')

    <h1>Estado: {{$cliente->nome}}</h1>
    <p>Código: {{$cliente->id}}</p>
    <p>Nome: {{$cliente->nome}}</p>



    {{-- voltar para a lista de estados --}}

    <a href={{route ('cliente.index')}}>Voltar</a>

    {{-- Editar o estado corrente --}}

    <a href={{route ('cliente.edit', $cliente->id)}}>Editar</a>

    {{-- Excluir o estado corrente --}}

    <form method="post" action="{{route ('cliente.destroy',$cliente->id)}}" onsubmit="return confirm('Confirmar exclusão');">

        @csrf
        @method('DELETE')

        <input type="submit" value ="excluir">

    </form>

@endsection
