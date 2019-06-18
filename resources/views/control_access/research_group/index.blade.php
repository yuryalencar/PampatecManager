@extends('adminlte::page')

@section('title', 'Critérios de Avaliação')

@section('content_header')
    <h1 class="inline">Grupos de Pesquisa</h1>
    @can('authorization', 'manager')
        <a class="btn btn-primary inline pull-right" href="{{route('evaluate.criteria.create')}}"><i class="fa fa-plus"
                                                                                                     aria-hidden="true"></i>
            Nova Grupo</a>
    @endcan
@stop

@section('content')
    <br/>

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th class="td-title">Nome</th>
            <th class="td-title">Responsável</th>
            <th class="td-title">Opções</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allResearchGroups as $researchGroup)
            <tr>
                <td>{{$researchGroup->name}}</td>
                <td>{{$researchGroup->responsible}}</td>
                <td>
                    <div class="btn-group">
                        <button type="submit" title="Mais Detalhes" name="id_record" value="{{$researchGroup->id}}"
                                class="btn btn-bitbucket"><i class="fa fa-info-circle"></i>
                        </button>
                        @can('authorization','manager')
                            <a href="{{route("evaluate.criteria.edit", $researchGroup->id)}}" title="Editar"
                               class="btn btn-openid"><i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route("control.access.research.remove", $researchGroup->id)}}" title="Excluir"
                               class="btn btn-danger"><i class="fa fa-trash"></i>
                            </a>
                        @endcan
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $allResearchGroups->links() }}
@stop