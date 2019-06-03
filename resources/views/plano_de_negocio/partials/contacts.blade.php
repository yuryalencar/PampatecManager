<h5 style="display: inline">Empresa/Projeto:</h5>
<button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>
@if(isset($plano))
    <input type="text" id="companyProject" name="companyProject" placeholder="" class="form-control" value="{{$plano->companyProject}}">
@else
    <input type="text" id="companyProject" name="companyProject" placeholder="" class="form-control">
@endif

<br/>

<h5 style="display: inline">E-mail dos Empreendedores</h5>
<button style="display: inline" type="button" class="btn btn-link pull-right"><i class="fa fa-question-circle fa-lg"
                                                                                 aria-hidden="true"></i></button>

@if(isset($plano))
    <input type="text" id="entrepreneursEmail" name="entrepreneursEmail" placeholder="" class="form-control" value="{{$plano->entrepreneursEmail}}">
@else
    <input type="text" id="entrepreneursEmail" name="entrepreneursEmail" placeholder="" class="form-control">
@endif

