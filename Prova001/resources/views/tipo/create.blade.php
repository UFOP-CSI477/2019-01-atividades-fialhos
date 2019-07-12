@extends('layouts.app')

@section('titulo','Estados')

@section('content')

{{--    <form method="post" action="{{route('tipo.store')}}">--}}
{{--        @csrf--}}
{{--        <p>Nome : <input type="text" name="nome"></p>--}}

{{--        --}}{{--            <input type="text" name="estado_id"></p>--}}
{{--        <input type="submit" name="btnsalvar" value="Incluir">--}}

{{--    </form>--}}

    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div  style="background:slategrey" class="card-header">{{ __('Criar Item') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{route('tipo.store')}}">
                            @csrf
                            <div class="form-group row">
                                <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome:') }}</label>

                                <input type="text" name="nome">

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

    @endsection