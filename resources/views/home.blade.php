@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @can('authorization','manager')
        Olá Gerente
    @endcan

    @can('authorization','evaluator')
        Olá Avaliador
    @endcan

    @can('authorization','entrepreneur')
        Olá Empreendedor
    @endcan
@stop