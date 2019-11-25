@extends('adminlte::page')

@section('title', 'Grupos de Pesquisa')

@section('content_header')
    <h1 class="inline">Salas</h1>
    @can('authorization', 'manager')
        <a class="btn btn-primary inline pull-right" href="{{route('control.access.room.create')}}"><i
                    class="fa fa-plus"
                    aria-hidden="true"></i>
            Nova Sala</a>
    @endcan
@stop

@section('content')
    <br/>

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th class="td-title">Nome</th>
            <th class="td-title">Descrição</th>
            <th class="td-title">Tamanho</th>
            @can('authorization','manager')
                <th class="td-title">Opções</th>
            @endcan
        </tr>
        </thead>
        <tbody>
        @foreach($rooms as $room)
            <tr>
                <td>{{$room->name}}</td>
                <td>{{$room->description}}</td>
                <td>{{$room->size}}</td>
                @can('authorization','manager')
                    <td>
                        <div class="btn-group">
                            <a href="{{route("control.access.room.edit", $room->id)}}" title="Editar"
                               class="btn btn-openid"><i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route("control.access.room.remove", $room->id)}}" title="Excluir"
                               class="btn btn-danger"><i class="fa fa-trash"></i>
                            </a>
                        </div>
                    </td>
                @endcan
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $rooms->links() }}
@stop