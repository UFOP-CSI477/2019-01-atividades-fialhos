@extends('layouts.app')

@section('titulo','Editar Estado')

@section('content')

<!DOCTYPE html>
<html dir="ltr" lang="br">
<head>
    <meta charset="utf-8">
    <title>@yield('titulo','Sistema Acadêmico')</title>
</head>
<body>
<!-- Exibir mensagens -> campo: mensagem //-->

@if(Session:: has('mensagem'))

    <p><strong>{{ Session:: get('mensagem') }}</strong>

@endif
{{--            <p>Seja Bem vindo,{{  $nome }} !</p>--}}
{{--            <p>Usuario:,{{  $user }} !</p>--}}
{{--            --}}

<ul>


    <li> <a href="/areageral">Area Geral</a></li>
    <li> <a href="/trans">Area cliente</a></li>
    <li> <a href="/areaadm">Area Administrativa</a></li>

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