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
    <br/><br/>

    <form id="form_submit" action="{{route('evaluate.criteria.store')}}" method="post">

        {{csrf_field()}}

        <label class="col-sm-2">Título: </label>
        <input type="text" name="title" class="col-sm-9"/>

        <br/><br/>

        <label class="col-sm-2">Peso: </label>
        <input type="number" name="score" class="col-sm-9"/>

        <br/><br/>

        <label class="col-lg-2 inline">Descrição:</label>
        <br/><br/>
        {{--<div id="description" name="description"></div>--}}
        <textarea id="description" name="description"></textarea>
        <script>var editor = new Jodit('#description', {
                removeButtons: ['fullsize','image','file','video','about', 'source']
            });</script>

        <br/><br/>

        <button class="btn pull-right bg-green">Salvar</button>
    </form>
@stop