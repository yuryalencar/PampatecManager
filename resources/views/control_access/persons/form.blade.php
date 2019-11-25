@extends('adminlte::page')

@section('title', 'Pessoas')

@section('content_header')
    @if(isset($researchGroup))
        <h1>Editar Pessoa</h1>
    @else
        <h1>Nova Pessoa</h1>
    @endif
@stop

@section('content')
    <form id="form_submit"
          action="{{isset($person)? route('control.access.people.update', $person->id):route('control.access.people.store') }}"
          method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">*Nome: </label>
            <input id="name" required class="form-control" type="text" name="name"
                   value="{{old("name",isset($person)?$person->name:null)}}"
                   placeholder="Insira o nome da pessoa aqui">
            <small id="nameHelp" class="form-text text-muted">Este campo é referente ao nome da pessoa que
                será cadastrado no sistema.
            </small>
        </div>
        <div class="form-group">
            <label for="email">*E-mail: </label>
            <input type="email" name="email" class="form-control"
                   value="{{old("responsible",isset($person)?$person->email:null)}}"
                   placeholder="Insira o e-mail da pessoa aqui"/>
            <small id="emailHelp" class="form-text text-muted">Este campo é referente ao nome do responsável pelo
                grupo de pesquisa que será cadastrado no sistema.
            </small>
        </div>
        @if(isset($person))
            <input hidden name="id" value="{{$person->id}}"/>
        @endif
        <button class="btn pull-right bg-green">Salvar</button>
    </form>
@stop