@extends('layouts.app')

@section('titulo','Editar Estado')

@section('content')

    <form method="post" action="{{route('tipo.update',$tipo->id)}}">
        @csrf
        @method('PATCH')
        <p>Nome: <input type="text" name="nome" value = "{{$tipo->nome}}"></p>
        <input type="submit" name="btnsalvar" value="Salvar">

    </form>
@endsection
