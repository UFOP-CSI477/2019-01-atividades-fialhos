@extends('layouts.app')

@section('titulo','Tests')

@section('content')

{{--    <a href="{{route ('test.create')}}">Inserir</a>--}}
{{--    <table>--}}
{{--        <tr>--}}
{{--            <th>Código</th>--}}
{{--            <th>User_id</th>--}}
{{--            <th>Procedmento_id</th>--}}
{{--            <th>data</th>--}}
{{--        </tr>--}}
{{--        @foreach ($test as $e)--}}
{{--            @if($User->id == $e->user_id)--}}
{{--                <tr>--}}
{{--                    <td>{{ $e->id }}</td>--}}
{{--                    <td>{{ $e->user_id }}</td>--}}
{{--                    <td>{{ $e->procedure_id }}</td>--}}
{{--                    <td>{{ $e->date }}</td>--}}
{{--                    <td><a href=" {{route ('test.show',$e->id)}}">Exibir</a></td>--}}

{{--                </tr>--}}
{{--            @endif--}}
{{--        @endforeach--}}
{{--    </table>--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tabela de Exames') }}</div>

                    <div class="card-body">
                        <table  border="1" align="center"  style="text-align: center; width : 450px">
                            <tr>
                                <th>Código</th>
                                <th>Usuario</th>
                                <th>Procedimento</th>
                                <th style="width:100px">Data</th>
                                <th>Editar</th>
                            </tr>
                            @foreach ($test as $e)
                                @if($User->id == $e->user_id)
                                    <tr>
                                        <td>{{ $e->id }}</td>
                                        <td>{{ $User->name }}</td>
                                        <td>{{ $e->procedure->nome }}</td>
                                        <td>{{ $e->date }}</td>
                                        <td>{{ $e->date }}</td>


                                        <td><a href=" {{route ('test.show',$e->id)}}">Alterar</a></td>

                                    </tr>
                                @endif
                            @endforeach
                        </table>
                        <td>Total de Exames:{{ ($test->count())}}</td>
                        <br>
                        <td>Total R$:{{ ($test->sum(function($test){return $test->procedure->price;}))}}</td>
                        <br>
                        <a href="{{route ('test.create')}}">Inserir</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection