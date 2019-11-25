@extends('adminlte::page')

@section('title', 'Salas')

@section('content_header')
    @if(isset($room))
        <h1>Editar Sala</h1>
    @else
        <h1>Nova Sala</h1>
    @endif
@stop

@section('content')
    <form id="form_submit"
          action="{{isset($room)? route('control.access.room.update', $room->id):route('control.access.room.store') }}"
          method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">*Nome: </label>
            <input id="name" required class="form-control" type="text" name="name"
                   value="{{old("name",isset($room)?$room->name:null)}}"
                   placeholder="Insira o nome da sala aqui">
            <small id="nameHelp" class="form-text text-muted">Este campo é referente ao nome da sala que
                será cadastrado no sistema.
            </small>
        </div>
        <div class="form-group">
            <label for="description">*Descrição: </label>
            <input type="text" name="description" class="form-control"
                   value="{{old("description",isset($room)?$room->description:null)}}"
                   placeholder="Insira uma descrição da sala aqui"/>
            <small id="descriptionHelp" class="form-text text-muted">Este campo é referente a descrição da sala que será
                cadastrada no sistema.
            </small>
        </div>
        <div class="form-group">
            <label for="value_of_the_meters">*Valor do Metro: </label>
            <input type="number" name="value_of_the_meters" class="form-control"
                   value="{{old("value_of_the_meters",isset($room)?$room->value_of_the_meters:0)}}"
                   placeholder="Insira o valor do metro desta sala"/>
            <small id="value_of_the_metersHelp" class="form-text text-muted">Este campo é referente ao do metro desta
                sala que será cadastrada no sistema.
            </small>
        </div>
        <div class="form-group">
            <label for="size">*Tamanho: </label>
            <input type="number" name="size" class="form-control"
                   value="{{old("size",isset($room)?$room->size:0)}}"
                   placeholder="Insira o tamanho da sala em m² aqui"/>
            <small id="sizeHelp" class="form-text text-muted">Este campo é referente ao tamanho da sala que será
                cadastrada no sistema.
            </small>
        </div>
        @if(isset($room))
            <input hidden name="id" value="{{$room->id}}"/>
        @endif
        <button class="btn pull-right bg-green">Salvar</button>
    </form>
@stop