@extends('adminlte::page')

@section('title', 'Pessoas')

@section('content_header')
    <h1 class="inline">Pessoas</h1>
    @can('authorization', 'manager')
        <a class="btn btn-primary inline pull-right" href="{{route('control.access.people.create')}}"><i
                    class="fa fa-plus"
                    aria-hidden="true"></i>
            Nova Pessoa</a>
    @endcan
@stop

@section('content')
    <br/>

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th class="td-title">Nome</th>
            <th class="td-title">E-mail</th>
            <th class="td-title">Opções</th>
        </tr>
        </thead>
        <tbody>
        @foreach($people as $person)
            <tr>
                <td>{{$person->name}}</td>
                <td>{{$person->email}}</td>
                <td>
                    <div class="btn-group">
                        <button type="button" id="btn-{{$person->id}}" onclick="" title="Mais Detalhes"
                                name="id_record" value="{{$person->id}}"
                                class="btn btn-bitbucket"><i class="fa fa-info-circle"></i>
                        </button>
                        <div id="modal-{{$person->id}}" data-izimodal-group="group1" data-izimodal-loop=""
                             data-izimodal-title="{{$person->name}}"
                             data-izimodal-subtitle="{{$person->email}}">
                            @foreach($person->rooms as $room)
                                <br/>
                                <p class="text-center"><b>Nome da Sala: </b>{{$room->name}}</p>
                                <br/>
                                <p class="text-center"><b>Descrição da Sala: </b>{{$room->description}}</p>
                                <hr/>
                            @endforeach
                        </div>
                        <script>
                            $(document).on('click', "#btn-{{$person->id}}", function (event) {
                                event.preventDefault();
                                $("#modal-{{$person->id}}").iziModal('open');
                            });

                            $("#modal-{{$person->id}}").iziModal({
                                headerColor: '#26A69A',
                                width: '50%',
                                overlayColor: 'rgba(0, 0, 0, 0.5)',
                                fullscreen: false,
                                transitionIn: 'fadeInUp',
                                transitionOut: 'fadeOutDown'
                            });
                        </script>
                        @can('authorization','manager')
                            <a href="{{route("control.access.people.permissions", $person->id)}}"
                               title="Adicionar Permissão"
                               class="btn btn-github"><i class="fa fa-plus-circle"></i>
                            </a>
                            <a href="{{route("control.access.people.edit", $person->id)}}" title="Editar"
                               class="btn btn-openid"><i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route("control.access.people.remove", $person->id)}}" title="Excluir"
                               class="btn btn-danger"><i class="fa fa-trash"></i>
                            </a>
                        @endcan
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $people->links() }}
@stop