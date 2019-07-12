@extends('principal')

@section('titulo','regioes')

@section('conteudo')

    <h1>Regiao: {{$regioes->nome}}</h1>

    <p>Código: {{$regioes->id}}</p>
    <p>Nome: {{$regioes->nome}}</p>


{{--     voltar para a lista de estados--}}

    <a href={{route ('regioes.index')}}>Voltar</a>

{{--     Editar o estado corrente--}}

    <a href={{route ('regioes.edit', $regioes->id)}}>Editar</a>

    {{-- Excluir o estado corrente --}}

    <form method="post" action="{{route ('regioes.destroy',$regioes->id)}}" onsubmit="return confirm('Confirmar exclusão');">

        @csrf
        @method('DELETE')

        <input type="submit" value ="excluir">

    </form>

@endsection