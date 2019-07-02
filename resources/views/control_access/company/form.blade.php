@extends('adminlte::page')

@section('title', 'Empresas')

@section('content_header')
    @if(isset($researchGroup))
        <h1>Editar Empresa</h1>
    @else
        <h1>Nova Empresa</h1>
    @endif
@stop

@section('content')
    <form id="form_submit"
          action="{{isset($company)? route('control.access.company.update', $company->id):route('control.access.company.store') }}"
          method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">*Nome: </label>
            <input id="name" required class="form-control" type="text" name="name"
                   value="{{old("name",isset($company)?$company->name:null)}}"
                   placeholder="Insira o nome do grupo de pesquisa aqui">
            <small id="nameHelp" class="form-text text-muted">Este campo é referente ao nome da nova empresa que
                será cadastrada no sistema.
            </small>
        </div>
        <div class="form-group">
            <label for="responsible">*Nome do responsável: </label>
            <input type="text" name="responsible" class="form-control"
                   value="{{old("responsible",isset($company)?$company->responsible:null)}}"
                   placeholder="Insira o nome do responsável aqui"/>
            <small id="responsibleHelp" class="form-text text-muted">Este campo é referente ao nome do responsável pela
                empresa que será cadastrada no sistema.
            </small>
        </div>
        <div class="form-group">
            <label for="responsible_email">*E-mail do responsável: </label>
            <input type="text" name="responsible_email" class="form-control"
                   value="{{old("score",isset($company)?$company->responsible_email:null)}}"
                   placeholder="Insira o e-mail do responsável aqui"/>
            <small id="responsible_emailHelp" class="form-text text-muted">Este campo é referente ao e-mail do responsável pela
                empresa que será cadastrada no sistema.
            </small>
        </div>
        @if(isset($company))
            <input hidden name="id" value="{{$company->id}}"/>
        @endif
        <button class="btn pull-right bg-green">Salvar</button>
    </form>
@stop