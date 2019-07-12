@extends('principal')

@section('titulo','Estados')

@section('conteudo')

    <a href="{{route ('alunos.create')}}">Inserir</a>
    <table>
        <tr>
            <th>Código </th>
            <th>Nome </th>
            <th>Cidade </th>

        </tr>
        @foreach ($alunos as $e)
            <tr>
                <td>{{ $e->id }}</td>
                <td><a href=" {{route ('alunos.show',$e->id)}}">{{ $e->nome }}</a></td>
                <td>{{ $e->cidade_id }}</td>
                <td><a href=" {{route ('alunos.show',$e->id)}}">Exibir</a></td>


            </tr>

        @endforeach
    </table>
@endsection