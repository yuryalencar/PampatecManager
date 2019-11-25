@extends('adminlte::page')

@section('title', 'Grupos de Pesquisa')

@section('content_header')
    <h1 class="inline">Grupos de Pesquisa</h1>
    @can('authorization', 'manager')
        <a class="btn btn-primary inline pull-right" href="{{route('control.access.research.create')}}"><i class="fa fa-plus"
                                                                                                     aria-hidden="true"></i>
            Novo Grupo</a>
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
                        <button type="button" id="btn-{{$researchGroup->id}}" onclick="" title="Mais Detalhes"
                                name="id_record" value="{{$researchGroup->id}}"
                                class="btn btn-bitbucket"><i class="fa fa-info-circle"></i>
                        </button>
                        <div id="modal-{{$researchGroup->id}}" data-izimodal-group="group1" data-izimodal-loop=""
                             data-izimodal-title="{{$researchGroup->name}}"
                             data-izimodal-subtitle="Empresa">
                            <br/>
                            <p class="text-center"><b>Nome da Empresa: </b>{{$researchGroup->name}}</p>
                            <br/>
                            <p class="text-center"><b>Nome do Responsável: </b>{{$researchGroup->responsible}}</p>
                            <br/>
                            <p class="text-center"><b>E-mail para Contato: </b>{{$researchGroup->email}}</p>
                            <br/>
                        </div>
                        <script>
                            $(document).on('click', "#btn-{{$researchGroup->id}}", function (event) {
                                event.preventDefault();
                                $("#modal-{{$researchGroup->id}}").iziModal('open');
                            });

                            $("#modal-{{$researchGroup->id}}").iziModal({
                                headerColor: '#26A69A',
                                width: '50%',
                                overlayColor: 'rgba(0, 0, 0, 0.5)',
                                fullscreen: false,
                                transitionIn: 'fadeInUp',
                                transitionOut: 'fadeOutDown'
                            });
                        </script>
                        @can('authorization','manager')
                            <a href="{{route("control.access.research.edit", $researchGroup->id)}}" title="Editar"
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