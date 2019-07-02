<h5 style="display: inline">Formação dos Sócios</h5> <button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="formationPartners" name="formationPartners" placeholder="" class="form-control">{{$plano->formationPartners}}</textarea>
@else
    <textarea rows="5" type="text" id="formationPartners" name="formationPartners" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Experiência Profissional dos Sócios:</h5> <button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>

@if(isset($plano))
    <textarea rows="5" type="text" id="experiencePartners" name="experiencePartners" placeholder="" class="form-control">{{$plano->experiencePartners}}</textarea>
@else
    <textarea rows="5" type="text" id="experiencePartners" name="experiencePartners" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Competências dos sócios nas áreas Técnica, Administrativa e Comercial:</h5> <button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="competencePartners" name="competencePartners" placeholder="" class="form-control">{{$plano->competencePartners}}</textarea>
@else
    <textarea rows="5" type="text" id="competencePartners" name="competencePartners" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Descrição da Participação Acionária:</h5> <button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="equityInterest" name="equityInterest" placeholder="" class="form-control">{{$plano->equityInterest}}</textarea>
@else
    <textarea rows="5" type="text" id="equityInterest" name="equityInterest" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Potencial de Geração de Emprego e Renda:</h5> <button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="potentialEmplymentIncome" name="potentialEmplymentIncome" placeholder="" class="form-control" value="{{$plano->potentialEmplymentIncome}}"></textarea>
@else
    <textarea rows="5" type="text" id="potentialEmplymentIncome" name="potentialEmplymentIncome" placeholder="" class="form-control"></textarea>
@endif