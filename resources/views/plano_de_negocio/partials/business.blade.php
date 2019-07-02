<h5 style="display: inline">Segmento de Clientes: *</h5> <button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>

@if(isset($plano))
    <textarea rows="5" type="text" id="customerSegment" name="customerSegment" placeholder="" class="form-control">{{$plano->customerSegment}}</textarea>
@else
    <textarea rows="5" type="text" id="customerSegment" name="customerSegment" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Proposta de Valor: *</h5> <button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="valueOffer" name="valueOffer" placeholder="" class="form-control" >{{$plano->valueOffer}}</textarea>
@else
    <textarea rows="5" type="text" id="valueOffer" name="valueOffer" placeholder="" class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Atividades Chave: *</h5> <button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>

@if(isset($plano))
    <textarea rows="5" type="text" id="keyActivities" name="keyActivities" placeholder="" class="form-control">{{$plano->keyActivities}}</textarea>
@else
    <textarea rows="5" type="text" id="keyActivities" name="keyActivities" placeholder="" class="form-control"></textarea>
@endif