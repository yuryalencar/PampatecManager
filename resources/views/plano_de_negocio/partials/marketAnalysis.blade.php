<h5 style="display: inline">Relações com Clientes</h5> <button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" name="customerRelations" placeholder="" class="form-control" value="{{$plano->customerRelations}}"></textarea>
@else
    <textarea rows="5" type="text" name="customerRelations" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Parcerias Chave:</h5> <button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" name="keyPartnerships" placeholder="" class="form-control" value="{{$plano->keyPartnerships}}"></textarea>
@else
    <textarea rows="5" type="text" name="keyPartnerships" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Canais:</h5> <button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" name="channels" placeholder="" class="form-control" value="{{$plano->channels}}"></textarea>
@else
    <textarea rows="5" type="text" name="channels" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Recursos Principais:</h5> <button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" name="mainFeatures" placeholder="" class="form-control" value="{{$plano->mainFeatures}}"></textarea>
@else
    <textarea rows="5" type="text" name="mainFeatures" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Concorrentes:</h5> <button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" name="competitors" placeholder="" class="form-control" value="{{$plano->competitors}}"></textarea>
@else
    <textarea rows="5" type="text" name="competitors" placeholder="" class="form-control"></textarea>
@endif