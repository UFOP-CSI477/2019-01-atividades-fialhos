@extends('principal')

@section('titulo','Lista de pessoas na turma')

@section('conteudo')

     <h2>Lista de pessoas na Turma</h2>
         <ol>
             @foreach($alunos as $a)
                 <li>{{$a}}</li>
             @endforeach
         </ol>

@endsection