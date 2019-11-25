@extends('adminlte::page')

@section('title', 'Critérios de Avaliação')

@section('content_header')
    <h1 class="inline">Critérios de Avaliação</h1>
    @can('authorization', 'manager')
        <a class="btn btn-primary inline pull-right" href="{{route('evaluate.criteria.create')}}"><i class="fa fa-plus"
                                                                                                     aria-hidden="true"></i>
            Novo Critério</a>
    @endcan
@stop

@section('content')
    <h5><b>Regra de Aceitação</b></h5>
    <p>Serão desclassificados os projetos que não atingirem 50% (cinquenta por cento) da pontuação individual de cada
        critério ou não atingirem 50%(cinquenta por cento) da pontuação máxima total.</p>

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
                        <button type="button" id="btn-{{$criteria->id}}" onclick="" title="Mais Detalhes"
                                name="id_record" value="{{$criteria->id}}"
                                class="btn btn-bitbucket"><i class="fa fa-info-circle"></i>
                        </button>
                        <div id="modal-{{$criteria->id}}" data-izimodal-group="group1" data-izimodal-loop=""
                             data-izimodal-title="{{$criteria->title}}"
                             data-izimodal-subtitle="Pontuação Máxima: {{$criteria->score}}">
                            {!! $criteria->description !!}
                        </div>
                        <script>
                            $(document).on('click', "#btn-{{$criteria->id}}", function (event) {
                                event.preventDefault();
                                $("#modal-{{$criteria->id}}").iziModal('open');
                            });

                            $("#modal-{{$criteria->id}}").iziModal({
                                headerColor: '#26A69A',
                                width: '50%',
                                overlayColor: 'rgba(0, 0, 0, 0.5)',
                                fullscreen: false,
                                transitionIn: 'fadeInUp',
                                transitionOut: 'fadeOutDown'
                            });
                        </script>

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