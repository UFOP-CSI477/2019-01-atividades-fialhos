@extends('layouts.app')

@section('titulo','Estados')

@section('content')


    <br>
    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div  style="background:slategrey"  class="card-header">{{ __('Tabela de items') }}</div>

                    <div class="card-body">
                        <table  border="1" align="center"  style="text-align: center; width : 330px">
                            <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>

                            </tr>
                            </thead>
                            @foreach ($tipo as $e)
                                <tr>
                                    <td>{{ $e->id }}</td>
                                    <td>{{ $e->nome }}</td>

                                </tr>

                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
