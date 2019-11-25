@extends('adminlte::page')

@section('title', 'Gerenciamento de Ajudas')

@section('content_header')
    <h1 class="inline">Gerenciamento de Ajudas</h1>
    @can('authorization', 'manager')
    @endcan
@stop

@section('content')

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th class="td-title">Dado do Plano de Negócio</th>
            <th class="td-title">Descrição da Ajuda</th>
            <th class="td-title">Opções</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allhelps as $help)
            <tr>
                <td>{{$help->name}}</td>
                <td>{{$help->description}}</td>
                <td>
                    <div class="btn-group">
                        @can('authorization','manager')
                            <a href="{{route("editar.ajuda", $help->id)}}" title="Editar"
                               class="btn btn-bitbucket"><i class="fa fa-edit"></i>
                            </a>
                        @endcan
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop