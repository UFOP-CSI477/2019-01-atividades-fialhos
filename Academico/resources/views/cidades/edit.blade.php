@extends('principal')

@section('titulo','Editar Estado')

@section('conteudo')

    <form method="post" action="{{route('cidades.update',$cidade->id)}}">
        @csrf
        @method('PATCH')
        <p>Nome: <input type="text" name="nome" value = "{{$cidade->nome}}"></p>
        <p>Estado :
            <select name = "estado_id">
                @foreach($estado as $e)
                    <option value="{{$e->id}}"
                        @if($cidade->estado_id == $e->id)
                            selected
                        @endif
                    >{{$e->nome}}</option>
                @endforeach
            </select>
            {{--<input type="text" name="sigla" value = "{{$cidade->estado_id}}"></p>--}}
        <input type="submit" name="btnsalvar" value="Salvar">

    </form>
@endsection