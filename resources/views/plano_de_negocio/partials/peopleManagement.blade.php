<h5 style="display: inline">Formação dos Sócios</h5> <button style="display: inline" id="formationPartnersId" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="formationPartners" name="formationPartners" placeholder="" class="form-control">{{$plano->formationPartners}}</textarea>
@else
    <textarea rows="5" type="text" id="formationPartners" name="formationPartners" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Experiência Profissional dos Sócios:</h5> <button style="display: inline" id="experiencePartnersId" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>

@if(isset($plano))
    <textarea rows="5" type="text" id="experiencePartners" name="experiencePartners" placeholder="" class="form-control">{{$plano->experiencePartners}}</textarea>
@else
    <textarea rows="5" type="text" id="experiencePartners" name="experiencePartners" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Competências dos sócios nas áreas Técnica, Administrativa e Comercial:</h5> <button id="competencePartnersId" style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="competencePartners" name="competencePartners" placeholder="" class="form-control">{{$plano->competencePartners}}</textarea>
@else
    <textarea rows="5" type="text" id="competencePartners" name="competencePartners" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Descrição da Participação Acionária:</h5> <button style="display: inline" type="button" id="equityInterestId" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="equityInterest" name="equityInterest" placeholder="" class="form-control">{{$plano->equityInterest}}</textarea>
@else
    <textarea rows="5" type="text" id="equityInterest" name="equityInterest" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Potencial de Geração de Emprego e Renda:</h5> <button style="display: inline" type="button" id="potentialEmplymentIncomeId" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="potentialEmplymentIncome" name="potentialEmplymentIncome" placeholder="" class="form-control" value="{{$plano->potentialEmplymentIncome}}"></textarea>
@else
    <textarea rows="5" type="text" id="potentialEmplymentIncome" name="potentialEmplymentIncome" placeholder="" class="form-control"></textarea>
@endif


<div id="modal-formationPartners" data-izimodal-loop="" data-izimodal-title="Formação dos Sócios" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        {!!$allhelp['18']->description!!}
    </p>
</div>

<div id="modal-experiencePartners" data-izimodal-loop="" data-izimodal-title="Experiência Proficial dos Sócios" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        {!!$allhelp['19']->description!!}
    </p>
</div>

<div id="modal-competencePartners" data-izimodal-loop="" data-izimodal-title="Competências dos sócios nas áreas Técnica, Administrativa e Comercial" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        {!!$allhelp['20']->description!!}
    </p>
</div>

<div id="modal-equityInterest" data-izimodal-loop="" data-izimodal-title="Descrição da Participação Acionária" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        {!!$allhelp['21']->description!!}
    </p>
</div>

<div id="modal-potentialEmplymentIncome" data-izimodal-loop="" data-izimodal-title="Potencial de Geração de Emprego e Renda" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        {!!$allhelp['22']->description!!}
    </p>
</div>

<script>
    $(document).on('click', '#formationPartnersId', function(event) {
        event.preventDefault();
        $('#modal-formationPartners').iziModal('open');
    });
    $('#modal-formationPartners').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });

    $(document).on('click', '#experiencePartnersId', function(event) {
        event.preventDefault();
        $('#modal-experiencePartners').iziModal('open');
    });
    $('#modal-experiencePartners').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });

    $(document).on('click', '#competencePartnersId', function(event) {
        event.preventDefault();
        $('#modal-competencePartners').iziModal('open');
    });
    $('#modal-competencePartners').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });

    $(document).on('click', '#equityInterestId', function(event) {
        event.preventDefault();
        $('#modal-equityInterest').iziModal('open');
    });
    $('#modal-equityInterest').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });

    $(document).on('click', '#potentialEmplymentIncomeId', function(event) {
        event.preventDefault();
        $('#modal-potentialEmplymentIncome').iziModal('open');
    });
    $('#modal-potentialEmplymentIncome').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });

</script>