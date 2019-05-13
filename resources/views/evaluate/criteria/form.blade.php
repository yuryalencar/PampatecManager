@extends('adminlte::page')

@section('title', 'Critérios de Avaliação')

@section('content_header')
    @if(isset($evaluateCriteria))
        <h1>Editar Critério</h1>
    @else
        <h1>Novo Critério</h1>
    @endif
@stop

@section('content')
    <textarea id="description" name="description"
              required class="summernote-basic form-control"
              data-placeholder="Nenhuma descrição informada..."
              data-content="{{old("description",isset($evaluateCriteria)?$evaluateCriteria->description:null)}}"></textarea>
@stop