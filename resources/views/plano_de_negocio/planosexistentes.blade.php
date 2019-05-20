@extends('adminlte::page')

@section('title', 'Novo Plano')

@section('content_header')

    <h1>Planos Existentes</h1>

@stop

@section('content')

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Status</th>
                <th>Opções</th>
            </tr>
        </thead>
        @foreach($allplans as $planos)
        <tbody>
            <tr>
                <td>{{$planos->companyProject}}</td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
        @endforeach
    </table>
@stop