@extends('adminlte::page')

@section('title', 'Critérios de Avaliação')

@section('content_header')
    <h1 class="inline">Grupos de Pesquisa Cadastrados</h1>
    @can('authorization', 'manager')
        <a class="btn btn-primary inline pull-right" href="{{route('evaluate.criteria.create')}}"><i class="fa fa-plus"
                                                                                                     aria-hidden="true"></i>
            Novo Grupo</a>
    @endcan
@stop

@section('content')
    <br/>

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th class="td-title">Título</th>
            <th class="td-title">Pontuação Máxima</th>
            <th class="td-title">Opções</th>
        </tr>
        </thead>
        <tbody>
        @foreach($criterias as $criteria)
            <tr>
                <td>{{$criteria->title}}</td>
                <td>{{$criteria->score}}</td>
                <td>
                    <div class="btn-group">
                        <button type="submit" title="Mais Detalhes" name="id_record" value="{{$criteria->id}}"
                                class="btn btn-bitbucket"><i class="fa fa-info-circle"></i>
                        </button>
                        @can('authorization','manager')
                            <a href="{{route("evaluate.criteria.edit", $criteria->id)}}" title="Editar"
                               class="btn btn-openid"><i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route("evaluate.criteria.remove", $criteria->id)}}" title="Excluir"
                               class="btn btn-danger"><i class="fa fa-trash"></i>
                            </a>
                        @endcan
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $criterias->links() }}
@stop