@extends('adminlte::page')


@section('css')

@stop

@section('content')
    <div class="box box-warning">
        <div class="box-header">Edite </div>
            <form action="{{ url('contato/'.$data->id) }}" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    @method('PUT')

                    @csrf

                        <div class="input-group">
                            <label for="saudacao">Saudação</label>
                            <select id="saudacao" name="saudacao" class="form-control">
                                <option value="">Selecione...</option>
                                <option value="Sr."{{ old('saudacao', $data->saudacao) == 'Sr.' ? ' selected' : ''}}>Sr.</option>
                                <option value="Sra."{{ old('saudacao', $data->saudacao) == 'Sra.' ? ' selected' : ''}}>Sra.</option>
                                <option value="Srta."{{ old('saudacao', $data->saudacao) == 'Srta.' ? ' selected' : ''}}>Srta.</option>
                            </select>
                            <div class="invalid-feedback">{{ $errors->first('saudacao') }}</div>
                        </div>
                        <br>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" required class="form-control{{$errors->has('nome') ? ' is-invalid':''}}" value="{{ old('nome', $data->nome) }}" id="nome" name="nome" placeholder="nome">
                            <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
                        </div>
                        <br>
                        <div class="input-group">
                            <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                            </div>
                                <input type="text" required class="form-control{{$errors->has('telefone') ? ' is-invalid':''}}" value="{{ old('telefone') }}" id="telefone" name="telefone" placeholder="(99)99999-9999">
                                <div class="invalid-feedback">{{ $errors->first('telefone') }}</div>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" class="form-control{{$errors->has('email') ? ' is-invalid':''}}" value="{{ old('email') }}" id="email" name="email" placeholder="email@provedor.com.br">
                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                        </div>
                        <br>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control{{$errors->has('data_nascimento') ? ' is-invalid':''}}" id="data_nascimento" value="{{ old('data_nascimento', $data->data_nascimento) }}" name="data_nascimento" placeholder="00/00/0000">
                            <div class="invalid-feedback">{{ $errors->first('data_nascimento') }}</div>
                        </div>
                        <br>
                        <div class="input-group">
                            <label for="avatar">Avatar</label>
                            <input type="file" class="form-control-file{{$errors->has('avatar') ? ' is-invalid':''}}" id="avatar" name="avatar" accept=".jpg, .jpeg, .png .gif">
                            <div class="invalid-feedback" style="display:inherit">{{ $errors->first('avatar') }}</div>
                            <!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/file -->
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="nota">Nota</label>
                            <textarea class="form-control" id="nota" name="nota" rows="2">{{ old('nota') }}</textarea>
                        </div>
                    <br>
                    </div>
                    <div class="input-group input-group-sm">
                        <span class="input-group-btn">
                            <a href="#" onclick="history.back()" class="btn btn-default">Voltar</a>
                            <button type="submit" class="btn btn-primary pull-right">Salvar</button>
                        </span>
                    </div>
                </form>
            </div>

@endsection
