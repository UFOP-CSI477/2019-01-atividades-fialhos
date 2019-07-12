@extends('principal')

@section('titulo','Estados')

@section('conteudo')

    <form method="post" action="{{route('cidades.store')}}">
        @csrf
        <p>Nome : <input type="text" name="nome"></p>
        <p>Estado :
        <select name = "estado_id">
            @foreach($estado as $e)
                <option value="{{$e->id}}">{{$e->nome}}</option>
            @endforeach
        </select>
{{--            <input type="text" name="estado_id"></p>--}}
        <input type="submit" name="btnsalvar" value="Incluir">

    </form>



@endsection