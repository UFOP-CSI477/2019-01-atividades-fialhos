@extends('layouts.app')

@section('titulo','Estados')

@section('content')

    <form  action ="{{route('func')}}" method="post" >
    @csrf

        <select name = "cliente_id">
            @foreach($cliente as $e)
                <option value="{{$e->id}}">{{$e->nome}}</option>
            @endforeach
        </select>
{{--        @foreach($tran as $f)--}}
{{--            <option value="{{$e->id}}">{{$e->nome}}</option>--}}
{{--            @if($f->cliente_id == select)--}}
{{--                <a href=" {{route ('trans.show',$e->id)}}">Exibir</a>--}}
{{--            @endif--}}
{{--        @endforeach--}}

        <input type="submit" name="busca" value="trans">
    </form>
    <li> <a href="/trans/create">Inserir Transação</a></li>

@endsection