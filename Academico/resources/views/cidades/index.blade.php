@extends('principal')

@section('titulo','Estados')

@section('conteudo')

    <a href="{{route ('cidades.create')}}">Inserir</a>
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Estado</th>
            <th>Estado - nome</th>

        </tr>
        @foreach ($cidades as $e)
            <tr>
                <td>{{ $e->id }}</td>
                <td><a href=" {{route ('cidades.show',$e->id)}}">{{ $e->nome }}</a></td>
                <td>{{ $e->estado_id }}</td>
                <td><a href=" {{route ('cidades.show',$e->id)}}">Exibir</a></td>


            </tr>

        @endforeach
    </table>
@endsection
