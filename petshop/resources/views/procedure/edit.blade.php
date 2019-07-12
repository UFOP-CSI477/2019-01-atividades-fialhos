@extends('layouts.app')

@section('titulo','Editar procedure')

@section('content')

    @if($User->type == 1 || $User->type == 2)
{{--        <form method="post" action="{{route('procedure.update',$procedure->id)}}">--}}
{{--            @csrf--}}
{{--            @method('PATCH')--}}
{{--            <p>Nome: <input type="text" name="nome" value = "{{$procedure->nome}}"></p>--}}
{{--            <p>Preço: <input type="text" name="price" value = "{{$procedure->price}}"></p>--}}
{{--            <input type="hidden" name="user_id" value = "{{$procedure->user_id}}">--}}
{{--            <p>User: <input type="text" name="user_id" value = "{{$User->name}}" disabled></p>--}}
{{--            <input type="submit" name="btnsalvar" value="Salvar">--}}

{{--        </form>--}}
{{--    @endif--}}
{{--    @if($User->type == 2)--}}
{{--        <form method="post" action="{{route('procedure.update',$procedure->id)}}">--}}
{{--            @csrf--}}
{{--            @method('PATCH')--}}
{{--            <input type="hidden" name="nome" value = "{{$procedure->nome}}">--}}
{{--            <p>Preço: <input type="text" name="price" value = "{{$procedure->price}}"></p>--}}
{{--            <input type="hidden" name="user_id" value = "{{$procedure->user_id}}">--}}
{{--            <input type="submit" name="btnsalvar" value="Salvar">--}}

{{--        </form>--}}
{{--    @endif--}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Exame') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{route('procedure.update',$procedure->id)}}">
                            @csrf
                            @method('PATCH');
                            @if($User->type == 1)
                            <div class="form-group row">
                                <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                                <div class="col-md-6">

                                    <input type="text" name="nome" value = "{{$procedure->nome}}">

                                </div>
                            </div>
                            @endif
                            <input type="hidden" name="user_id" value = "{{$User->id}}" >
                            <div class="form-group row">
                                <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('User:') }}</label>

                                <input type="text" name="user_id" value = "{{$User->name}}" disabled>
                            </div>

                            <div class="form-group row">
                                <label for="procedure_id" class="col-md-4 col-form-label text-md-right">{{ __('Preço:') }}</label>

                                    <input type="text" name="price" value = "{{$procedure->price}}">
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    {{--                                    <button type="submit" class="btn btn-primary" value="Incluir">--}}
                                    <input type="submit" name="btnsalvar" value="Salvar">

                                    {{--                                    </button>--}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif
@endsection