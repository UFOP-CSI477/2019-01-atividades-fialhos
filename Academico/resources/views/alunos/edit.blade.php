@extends('principal')

@section('titulo','Editar Estado')

@section('conteudo')

    <form method="post" action="{{route('alunos.update',$alunos->id)}}">
        @csrf
        @method('PATCH')
        <p>Nome: <input type="text" name="nome" value = "{{$alunos->nome}}"></p>
        <p>Email: <input type="text" name="sigla" value = "{{$alunos->Email}}"></p>
        <p>Cidade_id: <input type="text" name="sigla" value = "{{$alunos->cidade_id}}"></p>
        <input type="submit" name="btnsalvar" value="Salvar">

    </form>
@endsection