@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js" integrity="sha256-vVnwgKyq3pIb4XdL91l1EC8j7URqDRK8BAWvSnKX0U8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.min.css" integrity="sha256-IyR33qBiUXj7Clf/BpIUivtGnpIpLIL0XOCEGSQPZxg=" crossorigin="anonymous" />
    @can('authorization','manager')
        Olá Gerente
    @endcan

    @can('authorization','evaluator')
        Olá Avaliador
    @endcan

    @can('authorization','entrepreneur')
        Olá Empreendedor
    @endcan

    <p>ボタンをクリックするとモーダルが表示されます</p>
    <button class="open-default button">default</button>
    <div id="modal-default">
        <div class="close">
            <a data-izimodal-close="">×</a>
        </div>
        <p>このモーダルはデフォルト設定です</p>
    </div>

    <button class="open-options button">options</button>
    <div id="modal-options" data-izimodal-group="group1" data-izimodal-loop="" data-izimodal-title="オプション設定モーダル" data-izimodal-subtitle="サブタイトル">
        <p>このモーダルはオプション設定をしています<br>iframeモーダルとグループ設定しています</p>
    </div>

    <button class="open-iframe button">iframe</button>
    <div id="modal-iframe" data-izimodal-group="group1"></div>

    <button class="open-alert button">alert</button>
    <div id="modal-alert" data-izimodal-title="アラートモーダル" data-izimodal-subtitle="10秒で非表示になります"></div>

    <script>
        //default
        $(document).on('click', '.open-default', function(event) {
            event.preventDefault();
            $('#modal-default').iziModal('open');
        });
        $('#modal-default').iziModal();

        //options
        $(document).on('click', '.open-options', function(event) {
            event.preventDefault();
            $('#modal-options').iziModal('open');
        });
        $('#modal-options').iziModal({
            headerColor: '#26A69A', //ヘッダー部分の色
            width: '50%', //横幅
            overlayColor: 'rgba(0, 0, 0, 0.5)', //モーダルの背景色
            fullscreen: true, //全画面表示
            transitionIn: 'fadeInUp', //表示される時のアニメーション
            transitionOut: 'fadeOutDown' //非表示になる時のアニメーション
        });

        //iframe
        $(document).on('click', '.open-iframe', function(event) {
            event.preventDefault();
            $('#modal-iframe').iziModal('open', this);
        });
        $('#modal-iframe').iziModal({
            //width:400, //横幅
            iframe: true, //iframeを利用
            iframeWidth:400,
            iframeHeight: 300, //iframeの高さ
            iframeURL: 'https://codepen.io/' //iframe内に表示するurl
        });

        //alert
        $('#modal-alert').iziModal({
            headerColor: '#d43838', //ヘッダー部分の色
            width: 400, //横幅
            timeout: 10000, //10秒で非表示
            pauseOnHover: true,　//マウスオーバーでカウントダウン停止
            timeoutProgressbar: true, //プログレスバーの表示
            attached: 'bottom' //アラートの表示位置 top or bottom or　指定なしで中央
        });
        $(document).on('click', '.open-alert', function (event) {
            event.preventDefault();
            $('#modal-alert').iziModal('open');
        });
    </script>
@stop