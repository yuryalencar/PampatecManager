@extends('adminlte::page')

@section('title', 'Nova Permissão')

@section('content_header')
    <h1 class="inline">Nova Permissão</h1>
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
                            <form id="form_submit"
                                  action="{{route("control.access.people.store.permission",['id' =>  $person->id, 'idRoom' => $room->id])}}"
                                  method="post">
                                {{csrf_field()}}

                                <button type="submit"
                                   title="Adicionar Permissão"
                                   class="btn btn-github"><i class="fa fa-user-plus"></i>
                                </button>
                            </form>
                        @endcan
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $rooms->links() }}
@stop