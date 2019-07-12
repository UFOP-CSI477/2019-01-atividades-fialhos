@extends('layouts.app')

@section('titulo','test')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Solicitar Exame') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('test.store')}}">
                            @csrf

                            <div class="form-group row">
                                <label for="User" class="col-md-4 col-form-label text-md-right">{{ __('Usuario:') }}</label>

                                <input style="width: 300px" type="text" name="nome" value="{{$User->name}}" readonly>
                                <input type="hidden" name="user_id" value="{{$User->id}}" readonly>

                            </div>

                            <div class="form-group row">
                                <label for="procedure_id" class="col-md-4 col-form-label text-md-right">{{ __('Procedimento:') }}</label>


                                    <select name = "procedure_id">
                                        @foreach($procedure as $e)
                                            <option value="{{$e->id}}">{{$e->nome}}</option>
                                        @endforeach
                                    </select>

                            </div>

                            <div class="form-group row">
                                <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Data') }}</label>


                                    <input type="date" name="date">

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