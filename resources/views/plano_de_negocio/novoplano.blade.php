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
                            <input hidden id="status" name='status' value="Em Elaboração">
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
                            <div class="form-group" style="float: right;">
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                    <button type="button" id="buttonSubmitPlan" class="btn btn-success">Submeter</button>
                            </div>
                        </form>
                </form>
        </div>
    </div>

    <script>

        document.getElementById('navContact').style.color = 'red';
        document.getElementById('navBusiness').style.color = 'red';
        document.getElementById('navFinancialPlan').style.color = 'red';
        document.getElementById('navMarketAnalysis').style.color = 'red';
        document.getElementById('navPeopleManagement').style.color = 'red';
        document.getElementById('navProductServer').style.color = 'red';

        window.onload = enableContact();
        ButtonSubmeter();

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
            //Contacts
            document.getElementById("companyProject").onchange = function() {ChangeColor("navContact"); ButtonSubmeter();};
            //document.getElementById("entrepreneursEmail").onchange = function() {ChangeColor("navContact"); ButtonSubmeter();};

            //CompletOrNotBusiness();
            document.getElementById("customerSegment").onchange = function() {ChangeColor("navBusiness"); ButtonSubmeter();};
            document.getElementById("valueOffer").onchange = function() {ChangeColor("navBusiness"); ButtonSubmeter();};
            document.getElementById("keyActivities").onchange = function() {ChangeColor("navBusiness"); ButtonSubmeter();};
            //MarketAnalysis
            document.getElementById("customerRelations").onchange = function() {ChangeColor("navMarketAnalysis"); ButtonSubmeter();};
            document.getElementById("keyPartnerships").onchange = function() {ChangeColor("navMarketAnalysis"); ButtonSubmeter();};
            document.getElementById("channels").onchange = function() {ChangeColor("navMarketAnalysis"); ButtonSubmeter();};
            document.getElementById("mainFeatures").onchange = function() {ChangeColor("navMarketAnalysis"); ButtonSubmeter();};
            document.getElementById("competitors").onchange = function() {ChangeColor("navMarketAnalysis"); ButtonSubmeter();};
            //PeopleManagement
            document.getElementById("formationPartners").onchange = function() {ChangeColor("navPeopleManagement"); ButtonSubmeter();};
            document.getElementById("experiencePartners").onchange = function() {ChangeColor("navPeopleManagement"); ButtonSubmeter();};
            document.getElementById("competencePartners").onchange = function() {ChangeColor("navPeopleManagement"); ButtonSubmeter();};
            document.getElementById("equityInterest").onchange = function() {ChangeColor("navPeopleManagement"); ButtonSubmeter();};
            document.getElementById("potentialEmplymentIncome").onchange = function() {ChangeColor("navPeopleManagement"); ButtonSubmeter();};
            //ProductServer
            document.getElementById("stageEvolution_basicIdea").onchange = function() {ChangeColor("navProductServer"); ButtonSubmeter();};
            document.getElementById("stageEvolution_basicProject").onchange = function() {ChangeColor("navProductServer"); ButtonSubmeter();};
            document.getElementById("stageEvolution_detailedProject").onchange = function() {ChangeColor("navProductServer"); ButtonSubmeter();};
            document.getElementById("stageEvolution_developedPrototype").onchange = function() {ChangeColor("navProductServer"); ButtonSubmeter();};
            document.getElementById("stageEvolution_inTest").onchange = function() {ChangeColor("navProductServer"); ButtonSubmeter();};
            document.getElementById("stageEvolution_payingCustomers").onchange = function() {ChangeColor("navProductServer"); ButtonSubmeter();};
            document.getElementById("stageEvolution_others").onchange = function() {ChangeColor("navProductServer"); ButtonSubmeter();};
            document.getElementById("technologyProcesses").onchange = function() {ChangeColor("navProductServer"); ButtonSubmeter();};
            document.getElementById("innovationPotential").onchange = function() {ChangeColor("navProductServer"); ButtonSubmeter();};
            document.getElementById("application").onchange = function() {ChangeColor("navProductServer"); ButtonSubmeter();};
            document.getElementById("expectedDifficulties").onchange = function() {ChangeColor("navProductServer"); ButtonSubmeter();};
            document.getElementById("businessUniversity").onchange = function() {ChangeColor("navProductServer"); ButtonSubmeter();};
            document.getElementById("enterpriseCommunityGovernment").onchange = function() {ChangeColor("navProductServer"); ButtonSubmeter();};
            document.getElementById("infrastructure").onchange = function() {ChangeColor("navProductServer"); ButtonSubmeter();};
            //FinancialPlan
            document.getElementById("sourcesRevenue").onchange = function() {ChangeColor("navFinancialPlan"); ButtonSubmeter();};
            document.getElementById("costStructure").onchange = function() {ChangeColor("navFinancialPlan"); ButtonSubmeter();};
            document.getElementById("initialInvestment").onchange = function() {ChangeColor("navFinancialPlan"); ButtonSubmeter();};

        }

        function ChangeColor(nav){
           if(nav == "navContact"){
               if (document.getElementById('companyProject').value == '') {
                   document.getElementById('navContact').style.color = 'red';
               } else {
                   document.getElementById('navContact').style.color = 'green';
               }
           } else if (nav == "navBusiness"){
               if(document.getElementById('customerSegment').value == '' ||
                   document.getElementById('valueOffer').value == '' ||
                   document.getElementById('keyActivities').value == ''){
                   document.getElementById('navBusiness').style.color = 'red';
               }else {
                   document.getElementById('navBusiness').style.color = 'green';
               }
           } else if (nav == "navMarketAnalysis"){
               if(document.getElementById('customerRelations').value == '' ||
                   document.getElementById('keyPartnerships').value == '' ||
                   document.getElementById('channels').value == '' ||
                   document.getElementById('mainFeatures').value == '' ||
                   document.getElementById('competitors').value == ''){
                   document.getElementById('navMarketAnalysis').style.color = 'red';
               }else{
                   document.getElementById('navMarketAnalysis').style.color = 'green';
               }
           } else if (nav == "navFinancialPlan"){
               if(document.getElementById('sourcesRevenue').value == '' ||
                   document.getElementById('costStructure').value == '' ||
                   document.getElementById('initialInvestment').value == ''){
                   document.getElementById('navFinancialPlan').style.color = 'red';
               }else{
                   document.getElementById('navFinancialPlan').style.color = 'green';
               }
           } else if (nav == "navPeopleManagement"){
               if(document.getElementById('formationPartners').value == '' ||
                   document.getElementById('experiencePartners').value == '' ||
                   document.getElementById('competencePartners').value == ''||
                   document.getElementById('equityInterest').value == ''||
                   document.getElementById('potentialEmplymentIncome').value == ''){
                   document.getElementById('navPeopleManagement').style.color = 'red';
               }else{
                   document.getElementById('navPeopleManagement').style.color = 'green';
               }
           } else if (nav == "navProductServer"){
               if(document.getElementById('stageEvolution_basicIdea').checked == false &&
                   document.getElementById('stageEvolution_basicProject').checked == false &&
                   document.getElementById('stageEvolution_detailedProject').checked == false &&
                   document.getElementById('stageEvolution_developedPrototype').checked == false &&
                   document.getElementById('stageEvolution_inTest').checked == false &&
                   document.getElementById('stageEvolution_payingCustomers').checked == false &&
                   document.getElementById('stageEvolution_others').checked == false||
                   document.getElementById('technologyProcesses').value == '' ||
                   document.getElementById('innovationPotential').value == '' ||
                   document.getElementById('application').value == '' ||
                   document.getElementById('expectedDifficulties').value == '' ||
                   document.getElementById('businessUniversity').value == '' ||
                   document.getElementById('enterpriseCommunityGovernment').value == '' ||
                   document.getElementById('infrastructure').value == ''){
                   document.getElementById('navProductServer').style.color = 'red';
               }else{
                   document.getElementById('navProductServer').style.color = 'green';
               }
           }
        }

        function ButtonSubmeter(){
            ChangeColor("navContact");
            if( document.getElementById('navContact').style.color == 'green' &&
                document.getElementById('navBusiness').style.color == 'green' &&
                document.getElementById('navMarketAnalysis').style.color == 'green' &&
                document.getElementById('navProductServer').style.color == 'green' &&
                document.getElementById('navPeopleManagement').style.color == 'green' &&
                document.getElementById('navFinancialPlan').style.color == 'green'){
                document.getElementById("buttonSubmitPlan").disabled = false;
            }else{
                document.getElementById("buttonSubmitPlan").disabled = true;
            }
        }


    </script>
@stop