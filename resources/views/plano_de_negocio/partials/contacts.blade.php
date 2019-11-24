<h5 style="display: inline">Empresa/Projeto: *</h5>
<button style="display: inline" type="button" class="btn btn-link pull-right" id="companyProjectId"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <input type="text" id="companyProject" name="companyProject" placeholder="" class="form-control" value="{{$plano->companyProject}}">
@else
    <input type="text" id="companyProject" name="companyProject" placeholder="" class="form-control">
@endif

<br/>


<h5 style="display: inline">E-mail dos Empreendedores: </h5>
<button style="display: inline" type="button" class="btn btn-link pull-right" id="entrepreneursEmailId"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <input type="text" id="entrepreneursEmail" name="entrepreneursEmail" placeholder="" class="form-control" value="{{$plano->entrepreneursEmail}}">
@else
    <input type="text" id="entrepreneursEmail" name="entrepreneursEmail" placeholder="" class="form-control">
@endif

<div id="modal-companyProject" data-izimodal-loop="" data-izimodal-title="Empresa/Projeto:" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        Nome da Empresa ou do Projeto
    </p>
</div>
<div id="modal-entrepreneursEmail" data-izimodal-loop="" data-izimodal-title="E-mail dos Empreendedores:" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px;">
        Informe o(s) e-mail(s) de quem está propondo o empreendimento:
    </p>
</div>

<script>
    $(document).on('click', '#companyProjectId', function(event) {
        event.preventDefault();
        $('#modal-companyProject').iziModal('open');
    });
    $('#modal-companyProject').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });
    $(document).on('click', '#entrepreneursEmailId', function(event) {
        event.preventDefault();
        $('#modal-entrepreneursEmail').iziModal('open');
    });
    $('#modal-entrepreneursEmail').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });

</script>