@extends('adminlte::page')

@section('title', 'Critérios de Avaliação')

@section('content_header')
    <h1>Critérios de Avaliação</h1>
@stop

@section('content')
    <h5><b>Regra de Aceitação</b></h5>
    <p>Serão desclassificados os projetos que não atingirem 50% (cinquenta por cento) da pontuação individual de cada critério ou não atingirem 50%(cinquenta por cento) da pontuação máxima total.</p>

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Título</th>
            <th>Pontuação Máxima</th>
            <th>Opções</th>
        </tr>
        </thead>
        <tbody>
        @foreach($criterias as $criteria)
            <tr>
                <td>{{$criteria->title}}</td>
                <td>{{$criteria->score}}</td>
                <td>
                    <div class="btn-group">
                        <form action="#" method="POST" style="display: inline">
                            {!! csrf_field() !!}
                            <button type="submit" title="Mais Detalhes" name="id_record" value="{{$criteria->id}}"
                                    class="btn btn-bitbucket"><i class="fa fa-info-circle"></i>
                            </button>
                        </form>
                        {{--@can('manager')--}}
                        <form action="#" method="POST" style="display: inline">
                            {!! csrf_field() !!}
                            <button type="submit" title="Editar" name="id_record" value="{{$criteria->id}}"
                                    class="btn btn-google"><i class="fa fa-edit"></i>
                            </button>
                        </form>
                        {{--@endcan--}}
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $criterias->links() }}
@stop