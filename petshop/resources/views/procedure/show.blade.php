@extends('layouts.app')

@section('titulo','Itens')

@section('content')


{{--        <h1>Nome: {{$procedure->nome}}</h1>--}}

{{--        <p>Código: {{$procedure->id}}</p>--}}
{{--        <p>Nome: {{$procedure->nome}}</p>--}}
{{--        <p>Preço: {{$procedure->price}}</p>--}}
{{--        <p>User: {{$User->name}}</p>--}}


{{--        --}}{{--         voltar para a lista de estados--}}

{{--        <a href={{route ('procedure.index')}}>Voltar</a>--}}

{{--        --}}{{--         Editar o estado corrente--}}

{{--        <a href={{route ('procedure.edit', $procedure->id)}}>Editar</a>--}}

{{--    --}}{{--     Excluir o estado corrente --}}
{{--    @if($User->type == 1)--}}
{{--        <form method="post" action="{{route ('procedure.destroy',$procedure->id)}}" onsubmit="return confirm('Confirmar exclusão');">--}}

{{--            @csrf--}}
{{--            @method('DELETE')--}}

{{--            <input type="submit" value ="excluir">--}}

{{--        </form>--}}
{{--    @endif--}}
@if($User->type == 1 || $User->type == 2)
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __($procedure->nome) }}</div>

                    <div class="card-body">

                            <div class="form-group">
                                <p>Código: {{$procedure->id}}</p>
                            </div>

                            <div class="form-group">
                                <p>Nome: {{$procedure->nome}}</p>
                            </div>

                            <div class="form-group">
                                <p>Preço: {{$procedure->price}}</p>
                            </div>
                            <div class="form-group">
                                <p>User: {{$User->name}} </p>

                                <p><a href={{route ('procedure.edit', $procedure->id)}}>Editar</a></p>
                                <p><a href={{route ('procedure.index')}}>Voltar</a></p>
                            </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 ">
                                @if($User->type == 1)
                                    <form method="post" action="{{route ('procedure.destroy',$procedure->id)}}" onsubmit="return confirm('Confirmar exclusão');">

                                        @csrf
                                        @method('DELETE')

                                        <input type="submit" value ="Excluir">

                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

@endsection