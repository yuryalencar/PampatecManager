<h5 style="display: inline">Estágio de Evolução:</h5>
<button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
<div class="form-group">
    <div class="radio">
        @if(isset($plano))
            @if($plano->stageEvolution == 'Ideia Básica')
                <label><input type="radio" name="stageEvolution" value="Ideia Básica" checked="checked"/>Ideia
                    Básica</label>
            @else
                <label><input type="radio" name="stageEvolution" value="Ideia Básica"/>Ideia Básica</label>
            @endif
        @else
            <label><input type="radio" name="stageEvolution" value="Ideia Básica"/>Ideia Básica</label>
        @endif
    </div>
    <div class="radio">
        @if(isset($plano))
            @if($plano->stageEvolution == 'Projeto Básico')
                <label><input type="radio" name="stageEvolution" value="Projeto Básico" checked="checked"/>Projeto
                    Básico</label>
            @else
                <label><input type="radio" name="stageEvolution" value="Projeto Básico"/>Projeto Básico</label>
            @endif
        @else
            <label><input type="radio" name="stageEvolution" value="Projeto Básico"/>Projeto Básico</label>
        @endif
    </div>
    <div class="radio">
        @if(isset($plano))
            @if($plano->stageEvolution == 'Projeto Detalhado')
                <label><input type="radio" name="stageEvolution" value="Projeto Detalhado" checked="checked"/>Projeto Detalhado</label>
            @else
                <label><input type="radio" name="stageEvolution" value="Projeto Detalhado"/>Projeto Detalhado</label>
            @endif
        @else
            <label><input type="radio" name="stageEvolution" value="Projeto Detalhado"/>Projeto Detalhado</label>
        @endif
    </div>
    <div class="radio">
        @if(isset($plano))
            @if($plano->stageEvolution == 'Protótipo Desenvolvido')
                <label><input type="radio" name="stageEvolution" value="Protótipo Desenvolvido" checked="checked"/>Protótipo Desenvolvido</label>
            @else
                <label><input type="radio" name="stageEvolution" value="Protótipo Desenvolvido"/>Protótipo Desenvolvido</label>
            @endif
        @else
            <label><input type="radio" name="stageEvolution" value="Protótipo Desenvolvido"/>Protótipo Desenvolvido</label>
        @endif
    </div>
    <div class="radio">
        @if(isset($plano))
            @if($plano->stageEvolution == 'Em Teste no Mercado')
                <label><input type="radio" name="stageEvolution" value="Em Teste no Mercado" checked="checked"/>Em Teste no Mercado</label>
            @else
                <label><input type="radio" name="stageEvolution" value="Em Teste no Mercado"/>Em Teste no Mercado</label>
            @endif
        @else
            <label><input type="radio" name="stageEvolution" value="Em Teste no Mercado"/>Em Teste no Mercado</label>
        @endif
    </div>
    <div class="radio">
        @if(isset($plano))
            @if($plano->stageEvolution == 'Clientes Pagando')
                <label><input type="radio" name="stageEvolution" value="Clientes Pagando" checked="checked"/>Clientes Pagando</label>
            @else
                <label><input type="radio" name="stageEvolution" value="Clientes Pagando"/>Clientes Pagando</label>
            @endif
        @else
            <label><input type="radio" name="stageEvolution" value="Clientes Pagando"/>Clientes Pagando</label>
        @endif
    </div>
    <div class="radio">
        @if(isset($plano))
            @if($plano->stageEvolution == 'Outro')
                <label><input type="radio" name="stageEvolution" value="Outro" checked="checked"/>Outro</label>
            @else
                <label><input type="radio" name="stageEvolution" value="Outro"/>Outro</label>
            @endif
        @else
            <label><input type="radio" name="stageEvolution" value="Outro"/>Outro</label>
        @endif
    </div>
</div>

<br/>

<h5 style="display: inline">Tecnologia e Processos (Não Poluentes):</h5>
<button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" name="technologyProcesses" placeholder="" class="form-control"
              value="{{$plano->technologyProcesses}}"></textarea>
@else
    <textarea rows="5" type="text" name="technologyProcesses" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Potencial de Inovação Tecnológica</h5>
<button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" name="innovationPotential" placeholder="" class="form-control"
              value="{{$plano->innovationPotential}}"></textarea>
@else
    <textarea rows="5" type="text" name="innovationPotential" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Aplicação:</h5>
<button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" name="application" placeholder="" class="form-control"
              value="{{$plano->application}}"></textarea>
@else
    <textarea rows="5" type="text" name="application" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Dificuldades Esperadas:</h5>
<button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" name="expectedDifficulties" placeholder="" class="form-control"
              value="{{$plano->expectedDifficulties}}"></textarea>
@else
    <textarea rows="5" type="text" name="expectedDifficulties" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Interação entre Empresas e Universidade:</h5>
<button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" name="businessUniversity" placeholder="" class="form-control"
              value="{{$plano->businessUniversity}}"></textarea>
@else
    <textarea rows="5" type="text" name="businessUniversity" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Interação entre Empresa, Comunidade e Governo</h5>
<button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" name="enterpriseCommunityGovernment" placeholder="" class="form-control"
              value="{{$plano->enterpriseCommunityGovernment}}"></textarea>
@else
    <textarea rows="5" type="text" name="enterpriseCommunityGovernment" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Intra-estrutura necessária para Desenvolvimento e Produção</h5>
<button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" name="infrastructure" placeholder="" class="form-control"
              value="{{$plano->infrastructure}}"></textarea>
@else
    <textarea rows="5" type="text" name="infrastructure" placeholder="" class="form-control"></textarea>
@endif