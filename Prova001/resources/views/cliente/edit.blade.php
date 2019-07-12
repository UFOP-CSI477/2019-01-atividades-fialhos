@extends('layouts.app')

@section('titulo','Editar Estado')

@section('content')

    <form method="post" action="{{route('cliente.update',$cliente->id)}}">
        @csrf
        @method('PATCH')
        <p>Nome: <input type="text" name="nome" value = "{{$cliente->nome}}"></p>
        <input type="submit" name="btnsalvar" value="Salvar">

    </form>
@endsection