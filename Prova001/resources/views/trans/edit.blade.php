@extends('layouts.app')

@section('titulo','Editar Estado')

@section('content')

    <form method="post" action="{{route('trans.update',$tran->id)}}">
        @csrf
        @method('PATCH')
        <p>cliente: <input type="text" name="cliente_id" value = "{{$tran->cliente_id}}"></p>
        <p>tipo: <input type="text" name="tipo_id" value = "{{$tran->tipo_id}}"></p>
        <p>cliente:
            <select name = "cliente_id">
                @foreach($cliente as $e)
                    <option value="{{$e->id}}" selected="{{$tran->cliente_id}}" >{{$e->nome}}</option>
                @endforeach
            </select>
        </p>
        <p>tipo : <select name = "tipo_id">
                @foreach($tipo as $e)
                    <option value="{{$e->id}}" selected="{{$tran->tipo_id}}">{{$e->nome}}</option>
                @endforeach
            </select>
        </p>
        <p>data: <input type="text" name="data" value = "{{$tran->data}}"></p>
        <p>valor: <input type="text" name="valor" value = "{{$tran->valor}}"></p>
        <p>credito: <input type="text" name="credito" value = "{{$tran->credito}}"></p>
        <input type="submit" name="btnsalvar" value="Salvar">

    </form>
@endsection

