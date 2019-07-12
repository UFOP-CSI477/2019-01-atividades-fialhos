@extends('principal')

@section('titulo','regioes')

@section('conteudo')

    <a href="{{route ('regioes.create')}}">Inserir</a>
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
        </tr>
        @foreach ($regioes as $e)
            <tr>
                <td>{{ $e->id }}</td>
                <td><a href=" {{route ('regioes.show',$e->id)}}">{{ $e->nome }}</a></td>
                <td><a href=" {{route ('regioes.show',$e->id)}}">Exibir</a></td>
            </tr>

        @endforeach
    </table>
@endsection