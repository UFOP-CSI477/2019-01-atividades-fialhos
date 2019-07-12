@extends('principal')

@section('titulo','Estados')

@section('conteudo')

    <form method="post" action="{{route('alunos.store')}}">
        @csrf
        <p>Nome: <input type="text" name="nome"></p>
        <p>Email: <input type="text" name="Email"></p>
        <p>Cidade_id: <input type="text" name="cidade_id"></p>
        <input type="submit" name="btnsalvar" value="Incluir">

    </form>



@endsection
