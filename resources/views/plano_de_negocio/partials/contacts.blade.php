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
<button style="display: inline" id="entrepreneursEmailId" type="button" class="btn btn-link"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>

<div id="inputshere"></div>

<br/>

<table class="table" >
    <tr style="background: white">
        <td>
            <input type="email" id="email" placeholder="Insira o e-mail" class="form-control"/>
        </td>
        <td>
            <button type="button" onclick="adicionarEmail()" class="btn btn-success pull-right" style="font-size: 75%"><i class="fa fa-plus" aria-hidden="true"></i></button>
        </td>
    </tr>
</table>


@if(isset($plano))
    <table class="table table-bordered table-hover">
        <tbody id="emailBody">
        <tr>
        </tr>
        </tbody>
    </table>
@else
    <table id="emailTable" class="table table-bordered table-hover">
        <tbody id="emailBody">
        </tbody>
    </table>
@endif
<script>
    var cont = 0;
    function adicionarEmail() {
        if(document.getElementById("email").value != ""){
            var table = document.getElementById("emailBody");
            var row = table.insertRow(0);
            row.setAttribute("id", cont);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var input = document.createElement('input');
            input.setAttribute('name',"emails[]");
            input.setAttribute('value',  document.getElementById('email').value);
            input.setAttribute('hidden', 'true');

            document.getElementById('inputshere').appendChild(input);
            cell1.innerHTML = input.getAttribute('value');
            cell2.innerHTML = "<button type=\"button\" onclick=\"deletarEmail("+cont+")\" class=\"btn btn-google\"><i class=\"fa fa-trash-o\"></i></button>";
            cont++;

            document.getElementById("email").value = "";
        }

    }
    function deletarEmail(id) {
        document.getElementById(id).remove();
    }
</script>




<div id="modal-companyProject" data-izimodal-loop="" data-izimodal-title="Empresa/Projeto:" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        {!!$allhelp['0']->description!!}
    </p>
</div>
<div id="modal-entrepreneursEmail" data-izimodal-loop="" data-izimodal-title="E-mail dos Empreendedores:" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px;">
        {!!$allhelp['1']->description!!}
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