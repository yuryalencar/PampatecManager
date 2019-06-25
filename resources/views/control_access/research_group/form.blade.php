@extends('adminlte::page')

@section('title', 'Grupos de Pesquisa')

@section('content_header')
    @if(isset($researchGroup))
        <h1>Editar Grupo de Pesquisa</h1>
    @else
        <h1>Novo Grupo de Pesquisa</h1>
    @endif
@stop

@section('content')
    <form id="form_submit"
          action="{{isset($researchGroup)? route('control.access.research.update', $researchGroup->id):route('control.access.research.store') }}"
          method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">*Nome: </label>
            <input id="name" required class="form-control" type="text" name="name"
                   value="{{old("name",isset($researchGroup)?$researchGroup->name:null)}}"
                   placeholder="Insira o nome do grupo de pesquisa aqui">
            <small id="nameHelp" class="form-text text-muted">Este campo é referente ao nome do grupo de pesquisa que
                será cadastrado no sistema.
            </small>
        </div>
        <div class="form-group">
            <label for="responsible">*Nome do responsável: </label>
            <input type="text" name="responsible" class="form-control"
                   value="{{old("responsible",isset($researchGroup)?$researchGroup->responsible:null)}}"
                   placeholder="Insira o nome do responsável aqui"/>
            <small id="responsibleHelp" class="form-text text-muted">Este campo é referente ao nome do responsável pelo
                grupo de pesquisa que será cadastrado no sistema.
            </small>
        </div>
        <div class="form-group">
            <label for="responsible_email">*E-mail do responsável: </label>
            <input type="text" name="responsible_email" class="form-control"
                   value="{{old("score",isset($researchGroup)?$researchGroup->responsible_email:null)}}"
                   placeholder="Insira o e-mail do responsável aqui"/>
            <small id="responsible_emailHelp" class="form-text text-muted">Este campo é referente ao e-mail do responsável pelo
                grupo de pesquisa que será cadastrado no sistema.
            </small>
        </div>
        @if(isset($researchGroup))
            <input hidden name="id" value="{{$researchGroup->id}}"/>
        @endif
        <button class="btn pull-right bg-green">Salvar</button>
    </form>
@stop