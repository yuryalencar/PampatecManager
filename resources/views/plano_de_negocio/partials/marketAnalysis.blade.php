<h5 style="display: inline">Relações com Clientes</h5> <button style="display: inline" type="button" class="btn btn-link pull-right" id="customerRelationsId"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text"  id="customerRelations" name="customerRelations" placeholder="" class="form-control">{{$plano->customerRelations}}</textarea>
@else
    <textarea rows="5" type="text" id="customerRelations" name="customerRelations" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Parcerias Chave:</h5> <button style="display: inline" type="button" class="btn btn-link pull-right" id="keyPartnershipsId"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="keyPartnerships" name="keyPartnerships" placeholder="" class="form-control">{{$plano->keyPartnerships}}</textarea>
@else
    <textarea rows="5" type="text" id="keyPartnerships" name="keyPartnerships" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Canais:</h5> <button style="display: inline" type="button" class="btn btn-link pull-right" id="channelsId"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="channels" name="channels" placeholder="" class="form-control">{{$plano->channels}}</textarea>
@else
    <textarea rows="5" type="text" id="channels" name="channels" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Recursos Principais:</h5> <button style="display: inline" type="button" class="btn btn-link pull-right" id="mainFeaturesId"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="mainFeatures" name="mainFeatures" placeholder="" class="form-control">{{$plano->mainFeatures}}</textarea>
@else
    <textarea rows="5" type="text" id="mainFeatures" name="mainFeatures" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Concorrentes:</h5> <button style="display: inline" type="button" class="btn btn-link pull-right" id="competitorsId"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="competitors" name="competitors" placeholder="" class="form-control">{{$plano->competitors}}</textarea>
@else
    <textarea rows="5" type="text" id="competitors" name="competitors" placeholder="" class="form-control"></textarea>
@endif

<div id="modal-customerRelations" data-izimodal-loop="" hidden data-izimodal-title="Relações com clientes:" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        Que tipo de relação esperam os diferentes segmentos de mercado? </br>Que tipo de relações temos estabelecido?
    </p>
</div>

<div id="modal-keyPartnerships" data-izimodal-loop="" hidden data-izimodal-title="Parcerias Chave:" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">Quem são nossos parceiros chave?</br>
        Que recursos chave adquirimos de nossos parceiros?
    </p>
</div>

<div id="modal-channels" data-izimodal-loop="" hidden data-izimodal-title="Canais:" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        Que canais preferem nossos segmentos de mercado? </br>
        Como entregamos nossa proposta de valor ao cliente? </br>
        Quais têm melhores resultados?
    </p>
</div>

<div id="modal-mainFeatures" data-izimodal-loop="" hidden data-izimodal-title="Recursos Principais:" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        Que recursos chave requerem nossas propostas de valor?</br>
        Nossos canais de distribuição?</br>
        Relações com clientes?</br>
        Fontes de renda?
    </p>
</div>

<div id="modal-competitors" data-izimodal-loop="" hidden data-izimodal-title="Concorrentes:" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        Quem são nossos concorrentes?</br>
        Como trabalham?
    </p>
</div>

<script>
    $(document).on('click', '#customerRelationsId', function(event) {
        event.preventDefault();
        $('#modal-customerRelations').iziModal('open');
    });
    $('#modal-customerRelations').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });

    $(document).on('click', '#keyPartnershipsId', function(event) {
        event.preventDefault();
        $('#modal-keyPartnerships').iziModal('open');
    });
    $('#modal-keyPartnerships').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });

    $(document).on('click', '#channelsId', function(event) {
        event.preventDefault();
        $('#modal-channels').iziModal('open');
    });
    $('#modal-channels').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });

    $(document).on('click', '#mainFeaturesId', function(event) {
        event.preventDefault();
        $('#modal-mainFeatures').iziModal('open');
    });
    $('#modal-mainFeatures').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });

    $(document).on('click', '#competitorsId', function(event) {
        event.preventDefault();
        $('#modal-competitors').iziModal('open');
    });
    $('#modal-competitors').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });
</script>
