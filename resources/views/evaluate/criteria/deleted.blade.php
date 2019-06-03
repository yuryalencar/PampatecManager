@extends('adminlte::page')

@section('title', 'Critérios de Avaliação')

@section('content_header')
    <h1 class="inline">Critérios de Avaliação - Excluídos</h1>
@stop

@section('content')

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
                        @can('authorization','manager')
                            <div id="modal"> <!-- data-iziModal-fullscreen="true"  data-iziModal-title="Welcome"  data-iziModal-subtitle="Subtitle"  data-iziModal-icon="icon-home" -->
                                <!-- Modal content -->
                            </div>
                            <a onclick="exampleModal()" title="Restaurar"
                               class="btn btn-github"><i class="fa fa-refresh"></i>
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