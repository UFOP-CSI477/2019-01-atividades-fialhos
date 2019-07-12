@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html dir="ltr" lang="br">
<head>
    <meta charset="utf-8">
    <title>@yield('titulo','Sistema Acadêmico')</title>
</head>
<body>
<div class="row justify-content-center" style="text-align: center;font-size: 20px">
<ul>

     <a href="/paciente">Paciente</a>
     <br>
     <a href="/procedure">Procedimentos</a>
     <br>
     <a href="/adm">Area Administrativa</a>
</ul>
</div>
@yield("content")

</body>

</html>
@endsection