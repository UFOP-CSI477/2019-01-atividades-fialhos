@extends('principal')

@section('titulo','regioes')

@section('conteudo')

    <form method="post" action="{{route('regioes.update',$regioes->id)}}">
        @csrf
        @method('PATCH')
        <p>Nome: <input type="text" name="nome" value = "{{$regioes->nome}}"></p>
        <input type="submit" name="btnsalvar" value="Salvar">

    </form>


@endsection