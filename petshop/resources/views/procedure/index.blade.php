@extends('layouts.app')

@section('titulo','itens')

@section('content')




    @if($User->type == 1 || $User->type == 2)
{{--        <table class = "shadow-sm">--}}
{{--            <tr>--}}
{{--                <th>Código  </th>--}}
{{--                <th>Nome  </th>--}}
{{--                <th>Preço </th>--}}
{{--                <th>User_id  </th>--}}
{{--            </tr>--}}
{{--            @foreach ($procedure as $e)--}}
{{--                <tr>--}}
{{--                    <td>{{ $e->id }}  </td>--}}
{{--                    <td>{{ $e->nome }}  </td>--}}
{{--                    <td>{{ $e->price }}  </td>--}}
{{--                    <td>{{ $e->user_id  }}  </td>--}}
{{--                    <td><a href=" {{route ('procedure.show',$e->id)}}">Exibir</a></td>--}}
{{--                </tr>--}}

{{--            @endforeach--}}
{{--        </table>--}}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Tabela de Exames') }}</div>

                        <div class="card-body">
                            <table  border="1" align="center"  style="text-align: center; width : 330px">
                                <thead>
                                <tr>
                                    <th>Código  </th>
                                    <th>Nome  </th>
                                    <th>Preço </th>
                                    <th>User_id  </th>
                                    <th>Editar / Excluir </th>
                                </tr>
                                </thead>
                                @foreach ($procedure as $e)
                                    <tr>
                                        <td>{{ $e->id }}  </td>
                                        <td>{{ $e->nome }}  </td>
                                        <td>{{ $e->price }}  </td>
                                        <td>{{ $e->user_id  }}  </td>


                                        <td><a href=" {{route ('procedure.show',$e->id)}}">Exibir</a></td>
                                    </tr>

                                @endforeach
                            </table>
                            @if($User->type == 1)
                                <a href="{{route ('procedure.create')}}">Inserir Exame</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @else


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Tabela de Exames') }}</div>

                        <div class="card-body">
                            <table  border="1" align="center"  style="text-align: center; width : 330px">
                                <thead>
                                <tr>

                                    <th>Nome  </th>
                                    <th>Preço </th>

                                </tr>
                                </thead>
                                @foreach ($procedure as $e)
                                    <tr>

                                        <td>{{ $e->nome }}  </td>
                                        <td>{{ $e->price }}  </td>

                                    </tr>

                                @endforeach
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif
@endsection