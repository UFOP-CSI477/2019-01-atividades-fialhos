@extends('principal')

@section('titulo','regioes')

@section('conteudo')

    <form method="post" action="{{route('regioes.store')}}">
        @csrf
        <p>Nome: <input type="text" name="nome"></p>
        <input type="submit" name="btnsalvar" value="Incluir">

    </form>



@endsection