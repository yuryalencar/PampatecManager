<h5 style="display: inline">Fontes de Receita</h5>
<button style="display: inline" type="button" id="sourcesRevenueId" class="btn btn-link pull-right"><i
            class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="sourcesRevenue" name="sourcesRevenue" placeholder=""
              class="form-control">{{$plano->sourcesRevenue}}</textarea>
@else
    <textarea rows="5" type="text" id="sourcesRevenue" name="sourcesRevenue" placeholder=""
              class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Estrutura de Custo</h5>
<button style="display: inline" type="button" id="costStructureId" class="btn btn-link pull-right"><i
            class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="costStructure" name="costStructure" placeholder=""
              class="form-control">{{$plano->costStructure}}</textarea>
@else
    <textarea rows="5" type="text" id="costStructure" name="costStructure" placeholder=""
              class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Investimento Inicial</h5>
<button style="display: inline" type="button" id="initialInvestmentId" class="btn btn-link pull-right"><i
            class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
@if(isset($plano))
    <textarea rows="5" type="text" id="initialInvestment" name="initialInvestment" placeholder=""
              class="form-control">{{$plano->initialInvestment}}</textarea>
@else
    <textarea rows="5" type="text" id="initialInvestment" name="initialInvestment" placeholder=""
              class="form-control"></textarea>
@endif
<br/>

<h5 style="display: inline">Custos Fixos:</h5>
<button style="display: inline" id="fixedCostId" type="button" class="btn btn-link"><i
            class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
<button type="button" onclick="adicionarCustoFixo()" class="btn btn-success pull-right" style="font-size: 75%"><i
            class="fa fa-plus" aria-hidden="true"></i></button>
@if(isset($plano))
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th class="td-title">Descrição</th>
            <th class="td-title">Valor</th>
            <th class="td-title"></th>
        </tr>
        </thead>
        <tbody id="custoFixoBody">
        <p hidden>{{$count = 0}}</p>
        @foreach($plano->costs as $cost)
            @if($cost->is_fixed)
                <tr id="fixed-{{$count}}">
                    <td><input type="text" name="fixedCost[{{$count}}][description]" value="{{$cost->description}}"/>
                    </td>
                    <td>
                        R$ <input type="number" step="0.01" name="fixedCost[{{$count}}][value]"
                                  value="{{$cost->value}}"/>
                    </td>
                    <td>
                        <button type="button" onclick="deletarCustoFixo('fixed-{{$count}}')" class="btn btn-google"><i
                                    class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
                <p hidden>{{$count++}}</p>
            @endif
        @endforeach
        </tbody>
    </table>
@else
    <table id="custoFixoTable" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th class="td-title">Descrição</th>
            <th class="td-title">Valor</th>
            <th class="td-title"></th>
        </tr>
        </thead>
        <tbody id="custoFixoBody">
        </tbody>
    </table>
@endif
<script>
    var cont = {{isset($plano) ? count($plano->costs) + 1 : 0}};

    function adicionarCustoFixo() {
        var table = document.getElementById("custoFixoBody");

        var row = table.insertRow(0);
        row.setAttribute("id", cont);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        cell1.innerHTML = "<input type=\"text\" name=\"fixedCost[" + cont + "][description]\" value=\"\" />";
        cell2.innerHTML = "R$ <input type=\"number\" step=\"0.01\" name=\"fixedCost[" + cont + "][value]\" value=\"\" />";
        cell3.innerHTML = "<button type=\"button\" onclick=\"deletarCustoFixo(" + cont + ")\" class=\"btn btn-google\"><i class=\"fa fa-trash-o\"></i></button>";
        cont++;
    }

    function deletarCustoFixo(id) {
        document.getElementById(id).remove();
    }
</script>

<h5 style="display: inline">Custos Variáveis:</h5>
<button style="display: inline" id="variableCostId" type="button" class="btn btn-link"><i
            class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button>
<button type="button" onclick="adicionarCustoVariavel()" class="btn btn-success pull-right" style="font-size: 75%"><i
            class="fa fa-plus" aria-hidden="true"></i></button>

<script>
    var cont = {{isset($plano) ? count($plano->costs) + 1 : 0}};

    function adicionarCustoVariavel() {
        var table = document.getElementById("custoVariavelBody");

        var row = table.insertRow(0);
        row.setAttribute("id", cont);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        cell1.innerHTML = "<input type=\"text\" name=\"variableCost[" + cont + "][description]\" value=\"\" />";
        cell2.innerHTML = "R$ <input type=\"number\" step=\"0.01\" name=\"variableCost[" + cont + "][value]\" value=\"\" />";
        cell3.innerHTML = "<button type=\"button\" onclick=\"deletarCustoVariavel(" + cont + ")\" class=\"btn btn-google\"><i class=\"fa fa-trash-o\"></i></button>";
        cont++;
    }

    function deletarCustoVariavel(id) {
        document.getElementById(id).remove();
    }
</script>
@if(isset($plano))
    <table id="custoVariavelTable" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th class="td-title">Descrição</th>
            <th class="td-title">Valor</th>
            <th class="td-title"></th>
        </tr>
        </thead>
        <tbody id="custoVariavelBody">
        <p hidden>{{$count = 0}}</p>
        @foreach($plano->costs as $cost)
            @if($cost->is_variable)
                <tr id="variable-{{$count}}">
                    <td><input type="text" name="variableCost[{{$count}}][description]" value="{{$cost->description}}"/>
                    </td>
                    <td>
                        R$ <input type="number" step="0.01" name="variableCost[{{$count}}][value]"
                                  value="{{$cost->value}}"/>
                    </td>
                    <td>
                        <button type="button" onclick="deletarCustoVariavel('variable-{{$count}}')" class="btn btn-google"><i
                                    class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
                <p hidden>{{$count++}}</p>
            @endif
        @endforeach

        </tbody>
    </table>
@else
    <table id="custoVariavelTable" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th class="td-title">Descrição</th>
            <th class="td-title">Valor</th>
            <th class="td-title"></th>
        </tr>
        </thead>
        <tbody id="custoVariavelBody">
        </tbody>
    </table>
@endif


<div id="modal-sourcesRevenue" data-izimodal-loop=""
     data-izimodal-title="Fonte de Receita" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        {!!$allhelp['23']->description!!}
    </p>
</div>

<div id="modal-costStructure" data-izimodal-loop=""
     data-izimodal-title="Estrutura de Custo" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        {!!$allhelp['24']->description!!}
    </p>
</div>

<div id="modal-initialInvestment" data-izimodal-loop=""
     data-izimodal-title="Investimento Inicial" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        {!!$allhelp['25']->description!!}
    </p>
</div>

<div id="modal-fixedCost" data-izimodal-loop="" data-izimodal-title="Custos Fixos" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        {!!$allhelp['26']->description!!}
    </p>
</div>

<div id="modal-variableCost" data-izimodal-loop=""
     data-izimodal-title="Custos Variáveis" {{--data-izimodal-subtitle=""--}} >
    <p style="margin: 10px">
        {!!$allhelp['27']->description!!}
    </p>
</div>

<script>
    $(document).on('click', '#sourcesRevenueId', function (event) {
        event.preventDefault();
        $('#modal-sourcesRevenue').iziModal('open');
    });
    $('#modal-sourcesRevenue').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });

    $(document).on('click', '#costStructureId', function (event) {
        event.preventDefault();
        $('#modal-costStructure').iziModal('open');
    });
    $('#modal-costStructure').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });

    $(document).on('click', '#initialInvestmentId', function (event) {
        event.preventDefault();
        $('#modal-initialInvestment').iziModal('open');
    });
    $('#modal-initialInvestment').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });

    $(document).on('click', '#fixedCostId', function (event) {
        event.preventDefault();
        $('#modal-fixedCost').iziModal('open');
    });
    $('#modal-fixedCost').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });

    $(document).on('click', '#variableCostId', function (event) {
        event.preventDefault();
        $('#modal-variableCost').iziModal('open');
    });
    $('#modal-variableCost').iziModal({
        headerColor: '#00a65a',
        width: '50%', //横幅
        overlayColor: 'rgba(0, 0, 0, 0.5)',
        fullscreen: false,
    });
</script>