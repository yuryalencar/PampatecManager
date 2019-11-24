<h5 style="display: inline">Segmento de Clientes: *</h5> <button style="display: inline" type="button" class="btn btn-link pull-right" id="customerSegmentId"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="customerSegment" name="customerSegment" placeholder="" class="form-control">{{$plano->customerSegment}}</textarea>
@else
    <textarea rows="5" type="text" id="customerSegment" name="customerSegment" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Proposta de Valor: *</h5> <button style="display: inline" type="button" class="btn btn-link pull-right" id="valueOfferId"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="valueOffer" name="valueOffer" placeholder="" class="form-control" >{{$plano->valueOffer}}</textarea>
@else
    <textarea rows="5" type="text" id="valueOffer" name="valueOffer" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Atividades Chave: *</h5> <button style="display: inline" type="button" class="btn btn-link pull-right" id="keyActivitiesId"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>

@if(isset($plano))
    <textarea rows="5" type="text" id="keyActivities" name="keyActivities" placeholder="" class="form-control">{{$plano->keyActivities}}</textarea>
@else
    <textarea rows="5" type="text" id="keyActivities" name="keyActivities" placeholder="" class="form-control"></textarea>
@endif

{{--<button class="open-options button">options</button>--}}

<div id="modal-customerSegment"  data-izimodal-loop="" data-izimodal-title="Segmento de Cliente:" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">Para quem criamos valor? </br>
        Quais são os nossos clientes mais importantes?
    </p>
</div>

<div id="modal-valueOffer" data-izimodal-loop="" hidden data-izimodal-title="Proposta de Valor:" >
    <p style="margin: 10px">Que valor proporcionamos aos nossos clientes? </br>
        Que problema de nossos clientes ajudamos a solucionar? </br>
        Que pacotes de produtos ou serviços oferecemos a cada segmento de mercado?
    </p>
</div>

<div id="modal-keyActivities" data-izimodal-loop="" hidden data-izimodal-title="Atividades Chave:">
    <p style="margin: 10px">Que atividades chave requerem nossas propostas de valor?</br>
        Nossos canais de distribuição?
    </p>
</div>

<script>
    $(document).on('click', '#customerSegmentId', function(event) {
        event.preventDefault();
        $('#modal-customerSegment').iziModal('open');
    });
    $('#modal-customerSegment').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
     });

    $(document).on('click', '#valueOfferId', function(event) {
        event.preventDefault();
        $('#modal-valueOffer').iziModal('open');
    });
    $('#modal-valueOffer').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });

    $(document).on('click', '#keyActivitiesId', function(event) {
        event.preventDefault();
        $('#modal-keyActivities').iziModal('open');
    });
    $('#modal-keyActivities').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });
</script>

