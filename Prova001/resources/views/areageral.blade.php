@extends('layouts.app')

@section('titulo','Area Geral')

@section('content')



    <!DOCTYPE html>
    <html dir="ltr" lang="br">
    <head>
        <meta charset="utf-8">

    </head>
    <body>

    <ul>

        <li> <a href="/cliente">Clientes</a></li>
        <li> <a href="/tipo">Tipos</a></li>

    </ul>


    {{--            <h2>Lista de pessoas na Turma</h2>--}}
    {{--                <ol>--}}
    {{--                @foreach($alunos as $a)--}}
    {{--                    <li>{{$a}}</li>--}}
    {{--                @endforeach--}}
    {{--                </ol>--}}

    @if(Session:: has('mensagem'))

        <p><strong>{{ Session:: get('mensagem') }}</strong>
    @endif



    @yield("conteudo")

    </body>

    </html>

@endsection