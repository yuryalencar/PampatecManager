<h5 style="display: inline">Segmento de Clientes:</h5> <button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>

@if(isset($plano))
    <textarea rows="5" type="text" id="customerSegment" placeholder="" class="form-control" value="{{$plano->customerSegment}}"></textarea>
@else
    <textarea rows="5" type="text" id="customerSegment" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Proposta de Valor:</h5> <button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="valueOffer" placeholder="" class="form-control" value="{{$plano->valueOffer}}"></textarea>
@else
    <textarea rows="5" type="text" id="valueOffer" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Atividades Chave:</h5> <button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>

@if(isset($plano))
    <textarea rows="5" type="text" id="keyActivities" placeholder="" class="form-control" value="{{$plano->keyActivities}}"></textarea>
@else
    <textarea rows="5" type="text" id="keyActivities" placeholder="" class="form-control"></textarea>
@endif