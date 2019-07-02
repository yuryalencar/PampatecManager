<h5 style="display: inline">Estágio de Evolução:</h5>
<button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
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
<button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="technologyProcesses" name="technologyProcesses" placeholder="" class="form-control"
              >{{$plano->technologyProcesses}}</textarea>
@else
    <textarea rows="5" type="text" id="technologyProcesses" name="technologyProcesses" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Potencial de Inovação Tecnológica</h5>
<button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="innovationPotential" name="innovationPotential" placeholder="" class="form-control"
              >{{$plano->innovationPotential}}</textarea>
@else
    <textarea rows="5" type="text" id="innovationPotential" name="innovationPotential" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Aplicação:</h5>
<button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="application" name="application" placeholder="" class="form-control"
             >{{$plano->application}}</textarea>
@else
    <textarea rows="5" type="text" id="application" name="application" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Dificuldades Esperadas:</h5>
<button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="expectedDifficulties" name="expectedDifficulties" placeholder="" class="form-control"
              >{{$plano->expectedDifficulties}}</textarea>
@else
    <textarea rows="5" type="text" id="expectedDifficulties" name="expectedDifficulties" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Interação entre Empresas e Universidade:</h5>
<button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="businessUniversity" name="businessUniversity" placeholder="" class="form-control"
             >{{$plano->businessUniversity}}</textarea>
@else
    <textarea rows="5" type="text" id="businessUniversity" name="businessUniversity" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Interação entre Empresa, Comunidade e Governo</h5>
<button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="enterpriseCommunityGovernment" name="enterpriseCommunityGovernment" placeholder="" class="form-control"
              >{{$plano->enterpriseCommunityGovernment}}</textarea>
@else
    <textarea rows="5" type="text" id="enterpriseCommunityGovernment" name="enterpriseCommunityGovernment" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Intra-estrutura necessária para Desenvolvimento e Produção</h5>
<button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="infrastructure" name="infrastructure" placeholder="" class="form-control"
              >{{$plano->infrastructure}}</textarea>
@else
    <textarea rows="5" type="text" id="infrastructure" name="infrastructure" placeholder="" class="form-control"></textarea>
@endif