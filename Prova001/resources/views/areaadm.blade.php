@extends('layouts.app')

@section('titulo','Estados')

@section('content')



    <ul>

        <li> <a href="/">Home</a></li>
        <li><a href="{{route ('tipo.create')}}">Inserir Tipo</a></li>
        <li><a href="{{route ('cliente.create')}}">Inserir Cliente</a></li>

    </ul>



@endsection