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
    <form id="form_submit"
          action="{{isset($evaluateCriteria)? route('evaluate.criteria.update', $evaluateCriteria->id):route('evaluate.criteria.store') }}"
          method="post">

        {{csrf_field()}}
        <div class="form-group">
            <label for="title">*Título: </label>
            <input id="title" required class="form-control" type="text" name="title"
                   value="{{old("title",isset($evaluateCriteria)?$evaluateCriteria->title:null)}}"
                   placeholder="Insira um título aqui">
            <small id="titleHelp" class="form-text text-muted">Este campo é referente ao nome de um critério que será
                utilizado posteriormente para avaliações.
            </small>


        </div>
        <div class="form-group">
            <label for="score">*Peso: </label>
            <input type="number" name="score" class="form-control"
                   value="{{old("score",isset($evaluateCriteria)?$evaluateCriteria->score:null)}}"
                   placeholder="Insira um Peso aqui"/>
            <small id="scoreHelp" class="form-text text-muted">Este campo é referente ao peso que um critério possui
                para a avaliação.
            </small>
        </div>

        <div class="form-group">
            <label for="description">Descrição: </label>
            <textarea id="description" name="description"
                      placeholder="Insira uma Descrição aqui">{{old("description",isset($evaluateCriteria)?$evaluateCriteria->description:null)}}</textarea>
            <script>var editor = new Jodit('#description', {
                    removeButtons: ['fullsize', 'image', 'file', 'video', 'about', 'source']
                });</script>
            <small id="descriptionHelp" class="form-text text-muted">Este campo não é obrigatório e é referente à
                descrição do critério para ajudar no seu entendimento.
            </small>
        </div>

        @if(isset($evaluateCriteria))
            <input hidden name="id" value="{{$evaluateCriteria->id}}"/>
        @endif
        <button class="btn pull-right bg-green">Salvar</button>
    </form>
@stop