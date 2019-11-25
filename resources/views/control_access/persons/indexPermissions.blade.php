@extends('adminlte::page')

@section('title', 'Permissões')

@section('content_header')
    <h1 class="inline">Permissões do(a) {{$person->name}}</h1>
    @can('authorization', 'manager')
        <a class="btn btn-primary inline pull-right"
           href="{{route('control.access.people.new.permission', $person->id)}}"><i class="fa fa-plus"
                                                                                    aria-hidden="true"></i>
            Nova Permissão</a>
    @endcan
@stop

@section('content')
    <br/>

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th class="td-title">Nome</th>
            <th class="td-title">Descrição</th>
            <th class="td-title">Opções</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rooms as $room)
            <tr>
                <td>{{$room->name}}</td>
                <td>{{$room->description}}</td>
                <td>
                    <div class="btn-group">
                        @can('authorization','manager')
                            <a href="{{route("control.access.people.remove.permission", ['id' => $person->id, 'idRoom' => $room->id])}}" title="Excluir"
                               class="btn btn-danger"><i class="fa fa-trash"></i>
                            </a>
                        @endcan
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $rooms->links() }}
@stop