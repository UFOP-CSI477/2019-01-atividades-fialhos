@extends('layouts.app')

@section('titulo','Editar test')

@section('content')

{{--    <form method="post" action="{{route('test.update',$test->id)}}">--}}
{{--        @csrf--}}
{{--        @method('PATCH')--}}
{{--        <input type="hidden" name="user_id" value = "{{$User->id}}" >--}}
{{--        <p>Nome: <input type="text" name="user_id" value = "{{$User->name}}" disabled></p>--}}
{{--        <p>Procedure:--}}
{{--            <select name = "procedure_id">--}}
{{--                @foreach($procedure as $e)--}}
{{--                    <option value="{{$e->id}}">{{$e->nome}}</option>--}}
{{--                @endforeach--}}
{{--            </select></p>--}}
{{--        <p>Date: <input type="date" name="date" value = "{{$test->date}}"></p>--}}
{{--        <input type="submit" name="btnsalvar" value="Salvar">--}}

{{--    </form>--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Exame') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{route('test.update',$test->id)}}">
                            @csrf
                            @method('PATCH');
                            <input type="hidden" name="user_id" value = "{{$User->id}}" >
                            <div class="form-group row">
                                <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('User:') }}</label>

                                <input type="text" name="user_id" value = "{{$User->name}}" disabled>
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



                                    <input type="date" name="date" value = "{{$test->date}}">


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
@endsection