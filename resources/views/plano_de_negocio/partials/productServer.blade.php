<h5 style="display: inline">Estágio de Evolução:</h5>
<button style="display: inline" id="stageEvolutionId" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
<div class="form-group">
    <div class="radio">
        @if(isset($plano))
            @if($plano->stageEvolution == 'Ideia Básica')
                <label><input type="radio" id="stageEvolution_basicIdea" name="stageEvolution" value="Ideia Básica" checked="checked"/>Ideia
                    Básica</label>
            @else
                <label><input type="radio" id="stageEvolution_basicIdea" name="stageEvolution" value="Ideia Básica"/>Ideia Básica</label>
            @endif
        @else
            <label><input type="radio" id="stageEvolution_basicIdea" name="stageEvolution" value="Ideia Básica"/>Ideia Básica</label>
        @endif
    </div>
    <div class="radio">
        @if(isset($plano))
            @if($plano->stageEvolution == 'Projeto Básico')
                <label><input type="radio" id="stageEvolution_basicProject" name="stageEvolution" value="Projeto Básico" checked="checked"/>Projeto
                    Básico</label>
            @else
                <label><input type="radio" id="stageEvolution_basicProject" name="stageEvolution" value="Projeto Básico"/>Projeto Básico</label>
            @endif
        @else
            <label><input type="radio" id="stageEvolution_basicProject" name="stageEvolution" value="Projeto Básico"/>Projeto Básico</label>
        @endif
    </div>
    <div class="radio">
        @if(isset($plano))
            @if($plano->stageEvolution == 'Projeto Detalhado')
                <label><input type="radio" id="stageEvolution_detailedProject" name="stageEvolution" value="Projeto Detalhado" checked="checked"/>Projeto Detalhado</label>
            @else
                <label><input type="radio" id="stageEvolution_detailedProject" name="stageEvolution" value="Projeto Detalhado"/>Projeto Detalhado</label>
            @endif
        @else
            <label><input type="radio" id="stageEvolution_detailedProject" name="stageEvolution" value="Projeto Detalhado"/>Projeto Detalhado</label>
        @endif
    </div>
    <div class="radio">
        @if(isset($plano))
            @if($plano->stageEvolution == 'Protótipo Desenvolvido')
                <label><input type="radio" id="stageEvolution_developedPrototype" name="stageEvolution" value="Protótipo Desenvolvido" checked="checked"/>Protótipo Desenvolvido</label>
            @else
                <label><input type="radio" id="stageEvolution_developedPrototype" name="stageEvolution" value="Protótipo Desenvolvido"/>Protótipo Desenvolvido</label>
            @endif
        @else
            <label><input type="radio" id="stageEvolution_developedPrototype" name="stageEvolution" value="Protótipo Desenvolvido"/>Protótipo Desenvolvido</label>
        @endif
    </div>
    <div class="radio">
        @if(isset($plano))
            @if($plano->stageEvolution == 'Em Teste no Mercado')
                <label><input type="radio" id="stageEvolution_inTest" name="stageEvolution" value="Em Teste no Mercado" checked="checked"/>Em Teste no Mercado</label>
            @else
                <label><input type="radio" id="stageEvolution_inTest" name="stageEvolution" value="Em Teste no Mercado"/>Em Teste no Mercado</label>
            @endif
        @else
            <label><input type="radio" id="stageEvolution_inTest" name="stageEvolution" value="Em Teste no Mercado"/>Em Teste no Mercado</label>
        @endif
    </div>
    <div class="radio">
        @if(isset($plano))
            @if($plano->stageEvolution == 'Clientes Pagando')
                <label><input type="radio" id="stageEvolution_payingCustomers" name="stageEvolution" value="Clientes Pagando" checked="checked"/>Clientes Pagando</label>
            @else
                <label><input type="radio" id="stageEvolution_payingCustomers" name="stageEvolution" value="Clientes Pagando"/>Clientes Pagando</label>
            @endif
        @else
            <label><input type="radio" id="stageEvolution_payingCustomers" name="stageEvolution" value="Clientes Pagando"/>Clientes Pagando</label>
        @endif
    </div>
    <div class="radio">
        @if(isset($plano))
            @if($plano->stageEvolution == 'Outro')
                <label><input type="radio" id="stageEvolution_others" name="stageEvolution" value="Outro" checked="checked"/>Outro</label>
            @else
                <label><input type="radio" id="stageEvolution_others" name="stageEvolution" value="Outro"/>Outro</label>
            @endif
        @else
            <label><input type="radio" id="stageEvolution_others" name="stageEvolution" value="Outro"/>Outro</label>
        @endif
    </div>
</div>

<br/>

<h5 style="display: inline">Tecnologia e Processos (Não Poluentes):</h5>
<button style="display: inline" id="technologyProcessesId" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="technologyProcesses" name="technologyProcesses" placeholder="" class="form-control"
              >{{$plano->technologyProcesses}}</textarea>
@else
    <textarea rows="5" type="text" id="technologyProcesses" name="technologyProcesses" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Potencial de Inovação Tecnológica</h5>
<button style="display: inline" id="innovationPotentialId" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="innovationPotential" name="innovationPotential" placeholder="" class="form-control"
              >{{$plano->innovationPotential}}</textarea>
@else
    <textarea rows="5" type="text" id="innovationPotential" name="innovationPotential" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Aplicação:</h5>
<button style="display: inline" id="applicationId" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="application" name="application" placeholder="" class="form-control"
             >{{$plano->application}}</textarea>
@else
    <textarea rows="5" type="text" id="application" name="application" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Dificuldades Esperadas:</h5>
<button style="display: inline" id="expectedDifficultiesId" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="expectedDifficulties" name="expectedDifficulties" placeholder="" class="form-control"
              >{{$plano->expectedDifficulties}}</textarea>
@else
    <textarea rows="5" type="text" id="expectedDifficulties" name="expectedDifficulties" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Interação entre Empresas e Universidade:</h5>
<button style="display: inline" id="businessUniversityId" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="businessUniversity" name="businessUniversity" placeholder="" class="form-control"
             >{{$plano->businessUniversity}}</textarea>
@else
    <textarea rows="5" type="text" id="businessUniversity" name="businessUniversity" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Interação entre Empresa, Comunidade e Governo</h5>
<button style="display: inline" id="enterpriseCommunityGovernmentId" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="enterpriseCommunityGovernment" name="enterpriseCommunityGovernment" placeholder="" class="form-control"
              >{{$plano->enterpriseCommunityGovernment}}</textarea>
@else
    <textarea rows="5" type="text" id="enterpriseCommunityGovernment" name="enterpriseCommunityGovernment" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Intra-estrutura necessária para Desenvolvimento e Produção</h5>
<button style="display: inline" id="infrastructureId" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="infrastructure" name="infrastructure" placeholder="" class="form-control"
              >{{$plano->infrastructure}}</textarea>
@else
    <textarea rows="5" type="text" id="infrastructure" name="infrastructure" placeholder="" class="form-control"></textarea>
@endif

<div id="modal-stageEvolution" data-izimodal-loop="" hidden data-izimodal-title="Estágio de Evolução:" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        Qual o estágio atual de evolução do produto ou serviço proposto?
    </p>
</div>

<div id="modal-technologyProcesses" data-izimodal-loop="" hidden data-izimodal-title="Tecnologias e Processos (Não Poluentes):" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        Como nosso projeto está alinhado com a preservação de recursos naturais, sustentabilidade e possui valores nesse sentido?
    </p>
</div>

<div id="modal-innovationPotential" data-izimodal-loop="" hidden data-izimodal-title="Potencial de Inovação Tecnológica:" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        Qual a capacidade de gerar produtos ou serviços inovadores, que agreguem o uso de novas tecnologias?
    </p>
</div>

<div id="modal-application" data-izimodal-loop="" hidden data-izimodal-title="Aplicações:" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        A quem se aplica? </br> como? </br> De que maneira?
    </p>
</div>

<div id="modal-expectedDifficulties" data-izimodal-loop="" hidden data-izimodal-title="Dificuldades Esperadas:" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        Quais são nossas principais limitações?
    </p>
</div>

<div id="modal-businessUniversity" data-izimodal-loop="" hidden data-izimodal-title="Interação entre Empresa e Universidade:" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        Em que sentido seremos parceiros da Universidade
    </p>
</div>

<div id="modal-enterpriseCommunityGovernment" data-izimodal-loop="" hidden data-izimodal-title="Interação entre Empresa, Comunidade e Governo:" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        Qual será nossa importância para o meio em que estamos inseridos? Teremos relação com todos os envolvidos?
    </p>
</div>

<div id="modal-infrastructure" data-izimodal-loop="" hidden data-izimodal-title="Infraestrutura necessária para o Desenvolvimento e Produção:" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        Quanto de espaço será necessário? </br> Mobiliário? </br> Equipamentos?
    </p>
</div>



<script>
    $(document).on('click', '#stageEvolutionId', function(event) {
        event.preventDefault();
        $('#modal-stageEvolution').iziModal('open');
    });
    $('#modal-stageEvolution').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });

    $(document).on('click', '#technologyProcessesId', function(event) {
        event.preventDefault();
        $('#modal-technologyProcesses').iziModal('open');
    });
    $('#modal-technologyProcesses').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });

    $(document).on('click', '#innovationPotentialId', function(event) {
        event.preventDefault();
        $('#modal-innovationPotential').iziModal('open');
    });
    $('#modal-innovationPotential').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });

    $(document).on('click', '#applicationId', function(event) {
        event.preventDefault();
        $('#modal-application').iziModal('open');
    });
    $('#modal-application').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });

    $(document).on('click', '#expectedDifficultiesId', function(event) {
        event.preventDefault();
        $('#modal-expectedDifficulties').iziModal('open');
    });
    $('#modal-expectedDifficulties').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });

    $(document).on('click', '#businessUniversityId', function(event) {
        event.preventDefault();
        $('#modal-businessUniversity').iziModal('open');
    });
    $('#modal-businessUniversity').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });

    $(document).on('click', '#enterpriseCommunityGovernmentId', function(event) {
        event.preventDefault();
        $('#modal-enterpriseCommunityGovernment').iziModal('open');
    });
    $('#modal-enterpriseCommunityGovernment').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });

    $(document).on('click', '#infrastructureId', function(event) {
        event.preventDefault();
        $('#modal-infrastructure').iziModal('open');
    });
    $('#modal-infrastructure').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });
</script>