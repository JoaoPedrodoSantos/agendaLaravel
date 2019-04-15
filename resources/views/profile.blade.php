@extends('adminlte::page')

@section('content')

<h1>Meu Perfil</h1>

@include('includes.alerts')

<div class="box box-warning">
    <form action="{{ url('profile/update') }}" method="POST" enctype="multipart/form-data">
        <div class="box-body">
            {!! csrf_field() !!}
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user-secret"></i> <label for="email">Nome</label> 
                </div>
                <input type="text" value="{{ auth()->user()->name }}" name="name" placeholder="Nome" class="form-control">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i> <label for="email">E-mail</label> </span>
                
                <input type="email" value="{{ auth()->user()->email }}" name="email" placeholder="E-mail" class="form-control">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa  fa-unlock"></i>
                <label for="password">Senha:</label> </span>
                <input type="password" name="password" placeholder="Senha" class="form-control">
            </div>
            <br>
            <div class="input-group">
                @if (auth()->user()->image != null)
                    <img src="{{ url('storage/users/'.auth()->user()->image) }}" alt="{{ auth()->user()->name }}" style="max-width: 50px;">
                @endif
                <span class="input-group-addon"><i class="fa  fa-file-picture-o"></i>
                <label for="image">Imagem:</label></span>
                <input type="file" name="image" class="form-control">
            </div>
            <br>
            <div class="input-group">
                <button type="submit" class="btn bg-yellow">Atualizar Perfil</button>
            </div>
        </div>
   
    </form> 
</div>

@endsection