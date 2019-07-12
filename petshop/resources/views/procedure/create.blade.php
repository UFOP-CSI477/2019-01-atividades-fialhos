@extends('layouts.app')

@section('titulo','procedure')

@section('content')

    @if($User->type == "1")
{{--        <form method="post" action="{{route('procedure.store')}}">--}}
{{--            @csrf--}}
{{--            <p>Nome: <input type="text" name="nome"></p>--}}

{{--            <p>tipo: <input type="text" name="price"></p>--}}

{{--            <p>User: <input type="text" name="user_id"></p>--}}

{{--            <input type="submit" name="btnsalvar" value="Incluir">--}}

{{--        </form>--}}


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Criar Procedimento') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{route('procedure.store')}}">
                            @csrf
                            <div class="form-group row">
                                <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome:') }}</label>



                                    <input type="text" name="nome">


                            </div>

                            <div class="form-group row">
                                <label for="User" class="col-md-4 col-form-label text-md-right">{{ __('Usuario:') }}</label>

                                <input style="width: 300px" type="text" name="usuario" value="{{$User->name}}" readonly>
                                <input type="hidden" name="user_id" value="{{$User->id}}" readonly>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Preço:') }}</label>

                                    <input type="text" name="price"></p>

                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" value="Incluir">
                                        {{--                                        <input type="submit" name="btnsalvar" value="Incluir">--}}
                                        {{ __('Salvar') }}
                                    </button>
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
