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
                                <th>Código </th>

                                <th>Tipo </th>
                                <th>Data </th>
                                <th>Valor </th>
                                <th>Natureza </th>

                            </tr>
                            </thead>
                            @foreach ($trans as $e)
                                <tr>
                                    <td>{{ $e->id }}</td>

                                    @foreach($tipo as $f)
                                        @if($f->id == $e->tipo_id)
                                            <td>{{ $f->nome}}</td>
                                        @endif
                                    @endforeach
                                    <td>{{ $e->data }}</td>
                                    <td>{{ $e->valor }}</td>
                                    @if($e->credito == 1)
                                        <td>Credito</td>
                                    @else
                                        <td>Debito</td>
                                    @endif

                                </tr>

                            @endforeach
                        </table>
                        <p>Creditos : {{$trans->where('credito','=','1')->sum('valor')}}</p>
                        <p>Debitos : {{$trans->where('credito','!=','1')->sum('valor')}}</p>
                        <p>Saldo : {{$trans->where('credito','=','1')->sum('valor') - $trans->where('credito','!=','1')->sum('valor')}}</p>
                        @if($trans->where('credito','=','1')->sum('valor') > $trans->where('credito','!=','1')->sum('valor'))
                            <p>Saldo : Positivo</p>
                        @endif
                        @if ($trans->where('credito','=','1')->sum('valor') == $trans->where('credito','!=','1')->sum('valor'))
                            <p>Saldo : Zerado</p>
                        @endif
                        @if($trans->where('credito','=','1')->sum('valor') < $trans->where('credito','!=','1')->sum('valor'))
                            <p>Saldo : Negativo</p>
                        @endif
                            <a href="{{route ('trans.create')}}">Inserir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
