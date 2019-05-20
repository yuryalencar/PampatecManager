@extends('adminlte::page')

@section('title', 'Planos Existentes')

@section('content_header')

    <h1>Planos Existentes</h1>

@stop

@section('content')

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Status</th>
                <th>Opções</th>
            </tr>
        </thead>
        @foreach($allplans as $planos)
        <tbody>
            <tr>
                <td>{{$planos->companyProject}}</td>
                <td></td>
                <td>
                    <div class="btn-group">
                        <form action="{{route('editar.plano')}}" method="GET" style="display: inline">
                            <button type="submit" title="Editar" name="id" value="{{$planos->id}}"
                                    class="btn btn-bitbucket"><i class="fa fa-edit"></i>
                            </button>
                        </form>
                        <form action="{{route('destroy.plano')}}" method="GET" style="display: inline">
                            <button type="submit" title="Excluir" name="id" value="{{$planos->id}}"
                                    class="btn btn-google"><i class="fa fa-trash-o"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
@stop