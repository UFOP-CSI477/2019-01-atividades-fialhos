@extends('principal')

@section('titulo','Exibir Estado')

@section('conteudo')

    <h1>Estado: {{$alunos->nome}}</h1>

    <p>Código: {{$alunos->id}}</p>
    <p>Nome: {{$alunos->nome}}</p>
    <p>cidade_id: {{$alunos->cidade_id}}</p>


{{--     voltar para a lista de estados--}}

    <a href={{route ('alunos.index')}}>Voltar</a>

{{--     Editar o estado corrente--}}

    <a href={{route ('alunos.edit', $alunos->id)}}>Editar</a>

{{--     Excluir o estado corrente--}}

    <form method="post" action="{{route ('alunos.destroy',$alunos->id)}}" onsubmit="return confirm('Confirmar exclusão');">

        @csrf
        @method('DELETE')

        <input type="submit" value ="excluir">

    </form>

@endsection

