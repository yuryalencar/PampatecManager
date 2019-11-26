@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
{{--    <h1>Dashboard</h1>--}}
@stop

@section('content')
    <h4>
        O <b>Programa de Incubação de Empresas do PampaTec</b> apoia <b>StartUps</b> (negócios iniciantes de base tecnológica), oferecendo consultorias, cursos, oficinas e  espaços para instalação de empresas nas salas da unidade de <b>Alegrete do PampaTec</b>, elegendo <b>Planos de Negócios</b> de produtos ou processos que sejam inovadores e intensivos em tecnologia, conforme o regimento da Incubadora Tecnológica do PampaTec Alegrete (ler o Regimento).
    </h4> <h4>
        A seleção de empreendimentos é realizada de acordo com regras e procedimentos claros e objetivos, estabelecidos em edital específico de fluxo contínuo sobre a oportunidade de participar do sistema de incubação.
    </h4><h4>
        A demanda por salas para incubação dos empreendimentos será atendida conforme a disponibilidade de vagas na incubadora.
    </h4><h4>
        Resumo do <b>Processo Seletivo</b> (clique na imagem para ver a modelagem completa):
    </h4>

    <br/>

    <img class="center-block" src="{{ URL::to('/assets/img/ModeloProcesso.png') }}">

{{--    <img src="../../public/assets/fig/ModeloProcesso.png">--}}

{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js" integrity="sha256-vVnwgKyq3pIb4XdL91l1EC8j7URqDRK8BAWvSnKX0U8=" crossorigin="anonymous"></script>--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.min.css" integrity="sha256-IyR33qBiUXj7Clf/BpIUivtGnpIpLIL0XOCEGSQPZxg=" crossorigin="anonymous" />--}}
{{--    @can('authorization','manager')--}}
{{--        Olá Gerente--}}
{{--    @endcan--}}

{{--    @can('authorization','evaluator')--}}
{{--        Olá Avaliador--}}
{{--    @endcan--}}

{{--    @can('authorization','entrepreneur')--}}
{{--        Olá Empreendedor--}}
{{--    @endcan--}}

{{--    <p>ボタンをクリックするとモーダルが表示されます</p>--}}
{{--    <button class="open-default button">default</button>--}}
{{--    <div id="modal-default">--}}
{{--        <div class="close">--}}
{{--            <a data-izimodal-close="">×</a>--}}
{{--        </div>--}}
{{--        <p>このモーダルはデフォルト設定です</p>--}}
{{--    </div>--}}

{{--    <button class="open-options button">options</button>--}}
{{--    <div id="modal-options" data-izimodal-group="group1" data-izimodal-loop="" data-izimodal-title="オプション設定モーダル" data-izimodal-subtitle="サブタイトル">--}}
{{--        <p>このモーダルはオプション設定をしています<br>iframeモーダルとグループ設定しています</p>--}}
{{--    </div>--}}

{{--    <button class="open-iframe button">iframe</button>--}}
{{--    <div id="modal-iframe" data-izimodal-group="group1"></div>--}}

{{--    <button class="open-alert button">alert</button>--}}
{{--    <div id="modal-alert" data-izimodal-title="アラートモーダル" data-izimodal-subtitle="10秒で非表示になります"></div>--}}

{{--    <script>--}}
{{--        //default--}}
{{--        $(document).on('click', '.open-default', function(event) {--}}
{{--            event.preventDefault();--}}
{{--            $('#modal-default').iziModal('open');--}}
{{--        });--}}
{{--        $('#modal-default').iziModal();--}}

{{--        //options--}}
{{--        $(document).on('click', '.open-options', function(event) {--}}
{{--            event.preventDefault();--}}
{{--            $('#modal-options').iziModal('open');--}}
{{--        });--}}
{{--        $('#modal-options').iziModal({--}}
{{--            headerColor: '#26A69A', //ヘッダー部分の色--}}
{{--            width: '50%', //横幅--}}
{{--            overlayColor: 'rgba(0, 0, 0, 0.5)', //モーダルの背景色--}}
{{--            fullscreen: true, //全画面表示--}}
{{--            transitionIn: 'fadeInUp', //表示される時のアニメーション--}}
{{--            transitionOut: 'fadeOutDown' //非表示になる時のアニメーション--}}
{{--        });--}}

{{--        //iframe--}}
{{--        $(document).on('click', '.open-iframe', function(event) {--}}
{{--            event.preventDefault();--}}
{{--            $('#modal-iframe').iziModal('open', this);--}}
{{--        });--}}
{{--        $('#modal-iframe').iziModal({--}}
{{--            //width:400, //横幅--}}
{{--            iframe: true, //iframeを利用--}}
{{--            iframeWidth:400,--}}
{{--            iframeHeight: 300, //iframeの高さ--}}
{{--            iframeURL: 'https://codepen.io/' //iframe内に表示するurl--}}
{{--        });--}}

{{--        //alert--}}
{{--        $('#modal-alert').iziModal({--}}
{{--            headerColor: '#d43838', //ヘッダー部分の色--}}
{{--            width: 400, //横幅--}}
{{--            timeout: 10000, //10秒で非表示--}}
{{--            pauseOnHover: true,　//マウスオーバーでカウントダウン停止--}}
{{--            timeoutProgressbar: true, //プログレスバーの表示--}}
{{--            attached: 'bottom' //アラートの表示位置 top or bottom or　指定なしで中央--}}
{{--        });--}}
{{--        $(document).on('click', '.open-alert', function (event) {--}}
{{--            event.preventDefault();--}}
{{--            $('#modal-alert').iziModal('open');--}}
{{--        });--}}
{{--    </script>--}}
@stop