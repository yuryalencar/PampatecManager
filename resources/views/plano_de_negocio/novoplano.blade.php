@extends('adminlte::page')

@section('title', 'Novo Plano')

@section('content_header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li><a id="navContact" onclick="enableContact()">Contatos</a></li>
            <li><a id="navBusiness" onclick="enableBusiness()">O Negócio</a></li>
            <li><a id="navMarketAnalysis" onclick="enableMarketAnalysis()">Análise de Mercado</a></li>
            <li><a id="navProductServer" onclick="enableProductServer()">Produto ou Serviço</a></li>
            <li><a id="navPeopleManagement" onclick="enablePeopleManagement()">Gestão de Pessoas</a></li>
            <li><a id="navFinancialPlan" onclick="enableFinancialPlan()">Plano Financeiro</a></li>
        </ol>
    </nav>
@stop

@section('content')



    <div class="box">
        <div class="box-body">
            @if(isset($plano))
                <form action="{{route('update.plano')}}" method="post">
                    <input hidden name="id" value="{{$plano->id}}">
                    @else
                        <form action="{{route('salvar.plano')}}" method="post">
                            <input hidden id="status" name='status' value="Em andamento">
                            <input hidden id="owner_id" name='owner_id'
                                   value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                            @endif
                            {{csrf_field()}}
                            <div class="form-group">
                                <div id="contact">
                                    @include('plano_de_negocio.partials.contacts')
                                </div>
                                <div id="business">
                                    @include('plano_de_negocio.partials.business')
                                </div>
                                <div id="marketAnalysis">
                                    @include('plano_de_negocio.partials.marketAnalysis')
                                </div>
                                <div id="productServer">
                                    @include('plano_de_negocio.partials.productServer')
                                </div>
                                <div id="peopleManagement">
                                    @include('plano_de_negocio.partials.peopleManagement')
                                </div>
                                <div id="financialPlan">
                                    @include('plano_de_negocio.partials.financialPlan')
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success pull-right">Salvar</button>
                            </div>
                        </form>
                </form>
        </div>
    </div>

    <script>
        window.onload = enableContact();

        function disableAll() {
            document.getElementById('contact').setAttribute('hidden', 'true');
            document.getElementById('navContact').style.fontWeight = 'normal';
            document.getElementById('business').setAttribute('hidden', 'true');
            document.getElementById('navBusiness').style.fontWeight = 'normal';
            document.getElementById('financialPlan').setAttribute('hidden', 'true');
            document.getElementById('navFinancialPlan').style.fontWeight = 'normal';
            document.getElementById('marketAnalysis').setAttribute('hidden', 'true');
            document.getElementById('navMarketAnalysis').style.fontWeight = 'normal';
            document.getElementById('peopleManagement').setAttribute('hidden', 'true');
            document.getElementById('navPeopleManagement').style.fontWeight = 'normal';
            document.getElementById('productServer').setAttribute('hidden', 'true');
            document.getElementById('navProductServer').style.fontWeight = 'normal';
        }

        function enableContact() {
            disableAll();
            document.getElementById('contact').removeAttribute('hidden');
            document.getElementById('navContact').style.fontWeight = 'bold';
            CompletOrNot();
        }

        function enableBusiness() {
            disableAll();
            document.getElementById('business').removeAttribute('hidden');
            document.getElementById('navBusiness').style.fontWeight = 'bold';
            CompletOrNot();
        }

        function enableFinancialPlan() {
            disableAll();
            document.getElementById('financialPlan').removeAttribute('hidden');
            document.getElementById('navFinancialPlan').style.fontWeight = 'bold';
            CompletOrNot();
        }

        function enableMarketAnalysis() {
            disableAll();
            document.getElementById('marketAnalysis').removeAttribute('hidden');
            document.getElementById('navMarketAnalysis').style.fontWeight = 'bold';
            CompletOrNot();
        }

        function enablePeopleManagement() {
            disableAll();
            document.getElementById('peopleManagement').removeAttribute('hidden');
            document.getElementById('navPeopleManagement').style.fontWeight = 'bold';
            CompletOrNot();
        }

        function enableProductServer() {
            disableAll();
            document.getElementById('productServer').removeAttribute('hidden');
            document.getElementById('navProductServer').style.fontWeight = 'bold';
            CompletOrNot();
        }

        function CompletOrNot() {
            CompletOrNotContacts();
            CompletOrNotBusiness();
            CompletOrNotMarketAnalysis();
            //CompletOrNotPeopleManagement();
            //CompletOrNotProductServer();
        }

        function CompletOrNotContacts() {
            if (document.getElementById('companyProject').value == '') {
                document.getElementById('navContact').style.color = 'red';
            } else if (document.getElementById('entrepreneursEmail').value == '') {
                document.getElementById('navContact').style.color = 'red';
            } else {
                document.getElementById('navContact').style.color = 'green';
            }
        }

        function CompletOrNotBusiness() {
            if (document.getElementById('customerSegment').value == '') {
                document.getElementById('navBusiness').style.color = 'red';
            } else if (document.getElementById('valueOffer').value == '') {
                document.getElementById('navBusiness').style.color = 'red';
            } else if (document.getElementById('keyActivities').value == '') {
                document.getElementById('navBusiness').style.color = 'red';
            } else {
                document.getElementById('navBusiness').style.color = 'green';
            }
        }

        function CompletOrNotMarketAnalysis() {
            if (document.getElementById('customerRelations').value == '') {
                document.getElementById('navMarketAnalysis').style.color = 'red';
            } else if (document.getElementById('keyPartnerships').value == '') {
                document.getElementById('navMarketAnalysis').style.color = 'red';
            } else if (document.getElementById('channels').value == '') {
                document.getElementById('navMarketAnalysis').style.color = 'red';
            } else if (document.getElementById('mainFeatures').value == '') {
                document.getElementById('navMarketAnalysis').style.color = 'red';
            } else if (document.getElementById('competitors').value == '') {
                document.getElementById('navMarketAnalysis').style.color = 'red';
            } else {
                document.getElementById('navMarketAnalysis').style.color = 'green';
            }
        }

        function CompletOrNotPeopleManagement() {
            if (document.getElementById('').value == '') {
                document.getElementById('').style.color = 'red';
            } else if (document.getElementById('').value == '') {
                document.getElementById('').style.color = 'red';
            } else if (document.getElementById('').value == '') {
                document.getElementById('').style.color = 'red';
            } else if (document.getElementById('').value == '') {
                document.getElementById('').style.color = 'red';
            } else if (document.getElementById('').value == '') {
                document.getElementById('').style.color = 'red';
            } else if (document.getElementById('').value == '') {
                document.getElementById('').style.color = 'red';
            } else if (document.getElementById('').value == '') {
                document.getElementById('').style.color = 'red';
            } else {
                document.getElementById('').style.color = 'green';
            }
        }

        function CompletOrNotProductServer() {
            if (document.getElementById('').value == '') {
                document.getElementById('').style.color = 'red';
            } else if (document.getElementById('').value == '') {
                document.getElementById('').style.color = 'red';
            } else if (document.getElementById('').value == '') {
                document.getElementById('').style.color = 'red';
            } else if (document.getElementById('').value == '') {
                document.getElementById('').style.color = 'red';
            } else if (document.getElementById('').value == '') {
                document.getElementById('').style.color = 'red';
            } else if (document.getElementById('').value == '') {
                document.getElementById('').style.color = 'red';
            } else if (document.getElementById('').value == '') {
                document.getElementById('').style.color = 'red';
            } else {
                document.getElementById('').style.color = 'green';
            }
        }

    </script>
@stop