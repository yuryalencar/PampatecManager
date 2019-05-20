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
    <form id="form_submit" action="{{route('evaluate.criteria.store')}}" method="post">

        {{csrf_field()}}

        <div class="form-group">
            <label for="title">Título*: </label>
            <input id="title" class="form-control" type="text" name="title" placeholder="Insira um título aqui"
                   value="{{ old('title') }}"/>
            <small id="titleHelp" class="form-text text-muted">Este campo é referente ao nome de um critério que será
                utilizado posteriormente para avaliações.
            </small>


        </div>
        <div class="form-group">
            <label for="score">Peso*: </label>
            <input type="number" name="score" class="form-control" value="{{ old('score') }}"/>
            <small id="scoreHelp" class="form-text text-muted">Este campo é referente ao peso que um critério possui
                para a avaliação.
            </small>
        </div>

        <div class="form-group">
            <label for="description">Descrição: </label>
            <textarea id="description" name="description">{{ old('description') }}</textarea>
            <script>var editor = new Jodit('#description', {
                    removeButtons: ['fullsize', 'image', 'file', 'video', 'about', 'source']
                });</script>
            <small id="descriptionHelp" class="form-text text-muted">Este campo não é obrigatório e é referente à
                descrição do critério para ajudar no seu entendimento.
            </small>
        </div>

        <button class="btn pull-right bg-green">Salvar</button>
    </form>
@stop