@extends('adminlte::page')

@section('title', 'Sua Agenda') <!-- titulo da parte especifica-->

@section('content')

  <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box"> 
        <a href="{{ url('contato/lista') }}">
            <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>

          <div class="info-box-text">
            <span class="info-box-text text-center">Todos os Contatos</span>
          </div>
        </a> 
      </div>
  </div>   

  <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <a href="{{ url('contato') }}">
              <span class="info-box-icon bg-purple"><i class="fa  fa-sort-alpha-asc"></i></span>

              <div class="info-box-content">
                <span class="info-box-text text-center">Filtrar Por Letra Inicial</span>
              </div>
            </a>
          </div>
  </div>

  <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box"> 
            <a href="{{ url('contato/add') }}">
              <span class="info-box-icon bg-blue"><i class="fa  fa-user-plus"></i></span>

              <div class="info-box-text">
                <span class="info-box-text text-center">Adicionar Contato</span>
              </div>
            </a> 
          </div>
  </div>
  </div>
@stop