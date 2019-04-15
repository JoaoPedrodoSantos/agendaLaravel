@extends('adminlte::page')

@section('css')
<style media="screen">
    .img-avatar-xs {
        width: 50px;
        height: 50px;
        border: 1px solid #c0c0c0;
        border-radius: 5px;
    }
    .a-line {
        line-height: 30px;
    }
</style>    
@stop

@section('content')

    <div class="box">
        <div class="box-header text-center bg-purple">
          <h3 class="box-title">Todos os Contatos</h3>

            <a href="{{ url('contato/add') }}" class="btn btn-primary pull-right">Novo Contato <i class="fa  fa-user-plus"></i></a>
        </div>
        <div class="box-body">
                <table class="table" style="margin-bottom: inherit">
                    <tbody>
                        @foreach ($contato as $contato)
                        <tr>
                       
                            <td>
                                <a href="{{ url('contato/'.$contato->id) }}">
                                    <img src="{{ $contato->avatar_image }}" class="img-avatar-xs">
                                </a>
                            </td>
                            <td><a class='a-line' href="{{ url('contato/'.$contato->id . '/show') }}">{{ $contato->nome }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('contato/'.$contato->id . '/show') }}">{{ $contato->telefone }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('contato/'.$contato->id . '/show') }}">{{ $contato->email }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>

@endsection