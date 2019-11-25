@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet"
          href="{{ asset('vendor/adminlte/dist/css/skins/skin-' . config('adminlte.skin', 'blue') . '.min.css')}} ">
    @stack('css')
    @yield('css')
@stop

@section('body_class', 'skin-' . config('adminlte.skin', 'blue') . ' sidebar-mini ' . (config('adminlte.layout') ? [
    'boxed' => 'layout-boxed',
    'fixed' => 'fixed',
    'top-nav' => 'layout-top-nav'
][config('adminlte.layout')] : '') . (config('adminlte.collapse_sidebar') ? ' sidebar-collapse ' : ''))

@push('script')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
@endpush

@section('body')
    <script>
        window.onload = initDataTable;

        function initDataTable() {
            if (document.getElementsByClassName('table').item(0) != null) {
                $('.table').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "language": {
                        "sProcessing": "Processando...",
                        "search": "Pesquisar:",
                        "lengthMenu": "Exibir _MENU_ registros por página",
                        "zeroRecords": "Nada encontrado - Desculpe",
                        "sLoadingRecords": "Carregando...",
                        "info": "Mostrando Página _PAGE_ de _PAGES_",
                        "infoEmpty": "Nenhum registro disponível",
                        "infoFiltered": "(filtrado do total de registros _MAX_)",
                        "oPaginate": {
                            "sFirst": "Primeira",
                            "sLast": "Última",
                            "sNext": "Próxima",
                            "sPrevious": "Anterior"
                        },
                        "oAria": {
                            "sSortAscending": ": Ativar ordenação da coluna de maneira ascendente",
                            "sSortDescending": ": Ativar ordenação da coluna de maneira descendente"
                        },
                    }
                });
            }
        }
    </script>

    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">
            @if(config('adminlte.layout') == 'top-nav')
                <nav class="navbar navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}" class="navbar-brand">
                                {!! config('adminlte.logo', '<b>Admin</b>LTE') !!}
                            </a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                @each('adminlte::partials.menu-item-top-nav', $adminlte->menu(), 'item')
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    @else
                        <!-- Logo -->
                            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}" class="logo">
                                <!-- mini logo for sidebar mini 50x50 pixels -->
                                <span class="logo-mini">{!! config('adminlte.logo_mini', '<b>A</b>LT') !!}</span>
                                <!-- logo for regular state and mobile devices -->
                                <span class="logo-lg">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</span>
                            </a>

                            <!-- Header Navbar -->
                            <nav class="navbar navbar-static-top" role="navigation">
                                <!-- Sidebar toggle button-->
                                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                                    <span class="sr-only">{{ trans('adminlte::adminlte.toggle_navigation') }}</span>
                                </a>
                            @endif
                            <!-- Navbar Right Menu -->
                                <div class="navbar-custom-menu">

                                    <ul class="nav navbar-nav">
                                        <li>
                                            @if(config('adminlte.logout_method') == 'GET' || !config('adminlte.logout_method') && version_compare(\Illuminate\Foundation\Application::VERSION, '5.3.0', '<'))
                                                <a href="{{ url(config('adminlte.logout_url', 'auth/logout')) }}">
                                                    <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}
                                                </a>
                                            @else
                                                <a href="#"
                                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                >
                                                    <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}
                                                </a>
                                                <form id="logout-form"
                                                      action="{{ url(config('adminlte.logout_url', 'auth/logout')) }}"
                                                      method="POST" style="display: none;">
                                                    @if(config('adminlte.logout_method'))
                                                        {{ method_field(config('adminlte.logout_method')) }}
                                                    @endif
                                                    {{ csrf_field() }}
                                                </form>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            @if(config('adminlte.layout') == 'top-nav')
                    </div>
                    @endif
                </nav>
        </header>

    @if(config('adminlte.layout') != 'top-nav')
        <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu" data-widget="tree">
                        @each('adminlte::partials.menu-item', $adminlte->menu(), 'item')
                    </ul>
                    <!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>
    @endif

    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @if(config('adminlte.layout') == 'top-nav')
                <div class="container">
                @endif

                <!-- Content Header (Page header) -->
                    <section class="content-header">
                        @yield('content_header')
                    </section>

                    <!-- Main content -->
                    <section class="content">

                        @if(Session::has('errors'))
                            <button type="submit" id="btnalertfake" hidden>to show error</button>
                            <div class="row col-lg-12">
                                <div id="modal-alert" data-izimodal-title="{{ $errors->first() }}"
                                     data-izimodal-subtitle="Ocorreu um erro :(">
                                </div>
                            </div>
                            <script>
                                $(document).ready(function () {
                                    setTimeout(function(){ document.getElementById('btnalertfake').click(); }, 100);

                                    $(document).on('click', '#btnalertfake', function (event) {
                                        event.preventDefault();
                                        $('#modal-alert').iziModal('open');
                                    });

                                    $('#modal-alert').iziModal({
                                        headerColor: '#d43838',
                                        width: 400,
                                        timeout: 10000,
                                        pauseOnHover: true,　//マウスオーバーでカウントダウン停止
                                        timeoutProgressbar: true, //プログレスバーの表示
                                        attached: 'bottom' //アラートの表示位置 top or bottom or　指定なしで中央
                                    });
                                });
                            </script>
                        @endif

                        @if (session('status'))
                                <button type="submit" id="btnsuccessfake" hidden>to show error</button>
                                <div class="row col-lg-12">
                                    <div id="modal-success" data-izimodal-title="{{session('status')}}"
                                         data-izimodal-subtitle="Tudo ocorreu como o esperado fique tranquilo !">
                                    </div>
                                </div>
                                <script>
                                    $(document).ready(function () {
                                        setTimeout(function(){ document.getElementById('btnsuccessfake').click(); }, 100);

                                        $(document).on('click', '#btnsuccessfake', function (event) {
                                            event.preventDefault();
                                            $('#modal-success').iziModal('open');
                                        });

                                        $('#modal-success').iziModal({
                                            headerColor: '#00a65a',
                                            width: '50%', //横幅
                                            overlayColor: 'rgba(0, 0, 0, 0.5)', //モーダルの背景色
                                            fullscreen: false, //全画面表示
                                            timeout: 3000,
                                            transitionIn: 'fadeInUp', //表示される時のアニメーション
                                            transitionOut: 'fadeOutDown' //非表示になる時のアニメーション
                                        });
                                    });
                                </script>
                            @endif
                        @yield('content')

                    </section>
                    <!-- /.content -->
                    @if(config('adminlte.layout') == 'top-nav')
                </div>
                <!-- /.container -->
            @endif
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->
@stop

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    @stack('js')
    @yield('js')
@stop
