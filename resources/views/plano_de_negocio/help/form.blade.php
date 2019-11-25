@extends('adminlte::page')

@section('title', 'Editar Ajuda')

@section('content_header')
        <h1>Editar Ajuda</h1>
@stop

@section('content')
    <form id="form_submit"
          action="{{route('salvar.ajuda')}}"
          method="post">

        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Dado do Plano de Negócio: </label>
            <input id="name" required class="form-control" type="text" name="name"
                   value="{{old("name",isset($help)?$help->name:null)}}"
                   disabled>
            <br/>
        </div>

        <div class="form-group">
            <label for="description">Descrição: </label>
            <textarea id="description" name="description"
                      placeholder="Insira uma Descrição aqui">{{old("description",isset($help)?$help->description:null)}}</textarea>
            <script>var editor = new Jodit('#description', {
                    removeButtons: ['fullsize', 'image', 'file', 'about', 'source']
                });</script>
            <small id="descriptionHelp" class="form-text text-muted">Este campo é referente à
                descrição da ajuda do dado do plano de negócio.
            </small>
        </div>

        @if(isset($help))
            <input hidden name="id" value="{{$help->id}}"/>
        @endif
        <button class="btn pull-right bg-green">Salvar</button>
    </form>
@stop