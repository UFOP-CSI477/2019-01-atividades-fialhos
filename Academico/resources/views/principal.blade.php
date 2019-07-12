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

                <li> <a href="/">Home</a></li>
                <li> <a href="/welcome">About</a></li>
                <li> <a href="/alunos/lista">Listar</a> </li>
                <li> <a href="/estados">Estados</a></li>
                <li> <a href="/regioes">Regioes</a></li>
                <li> <a href="/cidades">Cidades</a></li>
                <li> <a href="/alunos">Alunos</a></li>
            </ul>


{{--            <h2>Lista de pessoas na Turma</h2>--}}
{{--                <ol>--}}
{{--                @foreach($alunos as $a)--}}
{{--                    <li>{{$a}}</li>--}}
{{--                @endforeach--}}
{{--                </ol>--}}



            @yield("conteudo")

        </body>

</html>