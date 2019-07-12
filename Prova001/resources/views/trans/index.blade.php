@extends('layouts.app')

@section('titulo','Estados')

@section('content')


    <br>
    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div  style="background:slategrey"  class="card-header">{{ __('Selecione o cliente para transaçao') }}</div>

                    <div class="card-body">

                        <form  action ="{{route('func')}}" method="post" >
                            @csrf

                            <select name = "cliente_id">
                                @foreach($cliente as $e)
                                    <option value="{{$e->id}}">{{$e->nome}}</option>
                                @endforeach
                            </select>
                            {{--        @foreach($tran as $f)--}}
                            {{--            <option value="{{$e->id}}">{{$e->nome}}</option>--}}
                            {{--            @if($f->cliente_id == select)--}}
                            {{--                <a href=" {{route ('trans.show',$e->id)}}">Exibir</a>--}}
                            {{--            @endif--}}
                            {{--        @endforeach--}}
                            <br>
                            <br>
                            <input class ="btn-primary" type="submit" name="busca" value="Exibir">
                        </form>
                        <br>
                        <li> <a href="/trans/create">Inserir Transação</a></li>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

