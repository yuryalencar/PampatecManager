@extends('adminlte::page')

@section('title', 'Empresas')

@section('content_header')
    <h1 class="inline">Empresas</h1>
    @can('authorization', 'manager')
        <a class="btn btn-primary inline pull-right" href="{{route('evaluate.criteria.create')}}"><i class="fa fa-plus"
                                                                                                     aria-hidden="true"></i>
            Nova Empresa</a>
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
        @foreach($allCompanies as $company)
            <tr>
                <td>{{$company->name}}</td>
                <td>{{$company->responsible}}</td>
                <td>
                    <div class="btn-group">
                        <button type="submit" title="Mais Detalhes" name="id_record" value="{{$company->id}}"
                                class="btn btn-bitbucket"><i class="fa fa-info-circle"></i>
                        </button>
                        @can('authorization','manager')
                            <a href="{{route("evaluate.criteria.edit", $company->id)}}" title="Editar"
                               class="btn btn-openid"><i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route("control.access.company.remove", $company->id)}}" title="Excluir"
                               class="btn btn-danger"><i class="fa fa-trash"></i>
                            </a>
                        @endcan
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $allCompanies->links() }}
@stop