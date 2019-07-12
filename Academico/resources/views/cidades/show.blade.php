@extends('principal')

@section('titulo','Exibir Estado')

@section('conteudo')

    <h1>Estado: {{$cidade->nome}}</h1>
    <p>Código: {{$cidade->id}}</p>
    <p>Nome: {{$cidade->nome}}</p>
    <p>estado_id: {{$cidade->estado_id}}</p>


    {{-- voltar para a lista de estados --}}

    <a href={{route ('cidades.index')}}>Voltar</a>

    {{-- Editar o estado corrente --}}

    <a href={{route ('cidades.edit', $cidade->id)}}>Editar</a>

    {{-- Excluir o estado corrente --}}

    <form method="post" action="{{route ('cidades.destroy',$cidade->id)}}" onsubmit="return confirm('Confirmar exclusão');">

        @csrf
        @method('DELETE')

        <input type="submit" value ="excluir">

    </form>

@endsection
