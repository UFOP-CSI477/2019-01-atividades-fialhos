@extends('layouts.app')

@section('titulo','Itens')

@section('content')

{{--    <h1>Usuario: {{$User->name}}</h1>--}}

{{--    <p>Nome: {{$User->name}}</p>--}}
{{--    @foreach($procedure as $e)--}}
{{--        @if($e->id == $test->procedure_id)--}}
{{--            <p>Tipo: {{$e->nome}}</p>--}}
{{--        @endif--}}
{{--    @endforeach--}}
{{--    <p>User: {{$test->date}}</p>--}}


{{--    --}}{{--         voltar para a lista de estados--}}

{{--    <a href={{route ('test.index')}}>Voltar</a>--}}

{{--    --}}{{--         Editar o estado corrente--}}

{{--    <a href={{route ('test.edit', $test->id)}}>Editar</a>--}}

{{--    --}}{{--     Excluir o estado corrente --}}

{{--    <form method="post" action="{{route ('test.destroy',$test->id)}}" onsubmit="return confirm('Confirmar exclusão');">--}}

{{--        @csrf--}}
{{--        @method('DELETE')--}}

{{--        <input type="submit" value ="excluir">--}}

{{--    </form>--}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __($User->name) }}</div>

                    <div class="card-body">

                        <div class="form-group">
                            <p>Nome: {{$User->name}}</p>
                        </div>

                        <div class="form-group">
                            @foreach($procedure  as $e)
                                @if($e->id == $test->procedure_id)
                                    <p>Tipo: {{$e->nome}}</p>
                                @endif
                            @endforeach
                        </div>

                        <div class="form-group">
                             <p>Data: {{$test->date}}</p>


                            <p><a href={{route ('test.edit', $test->id)}}>Editar</a></p>
                            <p><a href={{route ('test.index')}}>Voltar</a></p>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 ">

                                    <form method="post" action="{{route ('test.destroy',$test->id)}}" onsubmit="return confirm('Confirmar exclusão');">

                                        @csrf
                                        @method('DELETE')

                                        <input type="submit" value ="Excluir">

                                    </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection