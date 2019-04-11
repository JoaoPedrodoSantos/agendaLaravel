@extends('adminlte::page')

@section('title', 'Sua Agenda') <!-- titulo da parte especifica-->

@section('content_header')
@stop

@section('content')

<div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-blue"><i class="fa   fa-clock-o"></i></span>

          <div class="info-box-content">
            <span class="info-box-text text-center">Últimos Adicionados</span>
          </div>
        </div>
</div>

<div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-yellow"><i class="fa  fa-user-plus"></i></span>

          <div class="info-box-content">
            <span class="info-box-text text-center">Adicionar Contato</span>
          </div>
        </div>
</div>

<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>

    <div class="info-box-content">
      <span class="info-box-text text-center">Favoritos</span>
        <span class="info-box-number">0</span>
          </div>
          
        </div>
</div>
@stop