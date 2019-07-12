@extends('layouts.app')

@section('content')
<html dir="ltr" lang="br">
<head>
    <meta charset="utf-8">

</head>
<body>

<ul>
    <li> <a href="{{ route('register') }}">{{ __('Incluir Paciente') }}</a></li>
    <li> <a href="/test/create">Incluir pedido</a></li>
    <li> <a href="/test">Listar pedidos</a></li>

</ul>



</body>

</html>

@endsection