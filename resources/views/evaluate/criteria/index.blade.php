@extends('adminlte::page')

@section('title', 'Critérios de Avaliação')

@push('script')

@endpush

@section('content_header')
    <h1>Critérios de Avaliação</h1>
@stop

@section('content')
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.3.1.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js">
    <script>
        window.onload = initDataTable;

        function initDataTable() {
            $('.table').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        }

        console.log('dksadposa');
    </script>

    @can('authorization','manager')
        Usuário Autenticado: Gerente
    @endcan

    @can('authorization','evaluator')
        Usuário Autenticado: Avaliador
    @endcan

    @can('authorization','entrepreneur')
        Usuário Autenticado: Empreendedor
    @endcan
    <br/>
    <br/>
    <br/>

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Título</th>
            <th>Criado por</th>
            <th>Opções</th>
        </tr>
        </thead>
        <tbody>
        @foreach($criterias as $criteria)
            <tr>
                <td>{{$criteria->title}}</td>
                <td>{{$criteria->user()->first()->name}}</td>
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