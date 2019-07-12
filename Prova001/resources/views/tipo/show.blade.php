@extends('layouts.app')

@section('titulo','Exibir Estado')

@section('content')

    <h1>Estado: {{$tipo->nome}}</h1>
    <p>Código: {{$tipo->id}}</p>
    <p>Nome: {{$tipo->nome}}</p>



    {{-- voltar para a lista de estados --}}

    <a href={{route ('tipo.index')}}>Voltar</a>

    {{-- Editar o estado corrente --}}

    <a href={{route ('tipo.edit', $tipo->id)}}>Editar</a>

    {{-- Excluir o estado corrente --}}

    <form method="post" action="{{route ('tipo.destroy',$tipo->id)}}" onsubmit="return confirm('Confirmar exclusão');">

        @csrf
        @method('DELETE')

        <input type="submit" value ="excluir">

    </form>

@endsection
