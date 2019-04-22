@extends('adminlte::page')

@section('title', 'Novo Plano')

@section('content_header')
    <h1>Novo Plano</h1>
    <br>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li><a href="">Contatos</a></li>
            <li><a href="">O Negócio</a></li>
            <li><a href="">Análise de Mercado</a></li>
            <li><a href="">Produto ou Serviço</a></li>
            <li><a href="">Gestão de Pessoas</a></li>
            <li><a href="">Plano Financeiro</a></li>
        </ol>
    </nav>
@stop

@section('content')
    <div class="box">
{{--        <div class="box-header">--}}
{{--        </div>--}}
        <div class="box-body">
            <form>
                <div class="form-group">
                    <h4>Empresa/Projeto:</h4>
                    <input type="text" name="" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </form>
        </div>
    </div>
@stop