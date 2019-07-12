@extends('layouts.app')

@section('titulo','Estados')

@section('content')

{{--    <form method="post" action="{{route('trans.store')}}">--}}
{{--        @csrf--}}
{{--        <p>cliente:--}}
{{--        <select name = "cliente_id">--}}
{{--            @foreach($cliente as $e)--}}
{{--                <option value="{{$e->id}}">{{$e->nome}}</option>--}}
{{--            @endforeach--}}
{{--        </select>--}}
{{--        </p>--}}
{{--        <p>tipo : <select name = "tipo_id">--}}
{{--                @foreach($tipo as $e)--}}
{{--                    <option value="{{$e->id}}">{{$e->nome}}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--        </p>--}}
{{--        <p>data : <input type="text" name="data"></p>--}}
{{--        <p>valor : <input type="text" name="valor"></p>--}}
{{--        <p>credito : <input type="text" name="credito"></p>--}}
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
                        <form method="post" action="{{route('trans.store')}}">
                            @csrf
                            <div class="form-group row">
                                <label for="cliente_id" class="col-md-4 col-form-label text-md-right">{{ __('Cliente:') }}</label>

                                <select name = "cliente_id">
                                    @foreach($cliente as $e)
                                        <option value="{{$e->id}}">{{$e->nome}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group row">
                                <label for="tipo_id" class="col-md-4 col-form-label text-md-right">{{ __('Tipo:') }}</label>

                                <select name = "tipo_id">
                                    @foreach($tipo as $e)
                                        <option value="{{$e->id}}">{{$e->nome}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group row">
                                <label for="data" class="col-md-4 col-form-label text-md-right">{{ __('Data:') }}</label>

                                <input type="text" name="data">

                            </div>
                            <div class="form-group row">
                                <label for="valor" class="col-md-4 col-form-label text-md-right">{{ __('Valor:') }}</label>

                                <input type="text" name="valor">

                            </div>
                            <div class="form-group row">
                                <label for="credito" class="col-md-4 col-form-label text-md-right"></label>
                              <input type="radio" name="credito" value="0">Débito<input type="radio" name="credito" value="1"> Crédito

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