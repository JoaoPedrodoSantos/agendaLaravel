@extends('adminlte::page')


@section('css')
<style>
.form-control-static {
    font-weight: bold;
}
.img-avatar {
    max-width: 100%;
    border: 1px solid #c0c0c0;
    border-radius: 5px;
    margin-bottom: 15px;
}
a:last-of-type{
    margin-right: 10px;
}
</style>
@endsection

@section('js')
    <script type="text/javascript">
        function validate_delete() {
            return confirm('Excluir o registro atual? Essa ação não pode ser desfeita.');
        }
    </script>
@stop

@section('content')

    <div class="box box-warning">
        <form action="{{ url('contato/'.$data->id) }}" method="post" onsubmit="return validate_delete()">
            <div class="box-body">
                @method('DELETE')
                    {{ csrf_field() }}

                        <div class="col-sm-4">
                            <img src="{{ $data->avatar_image }}" class="img-avatar">
                        </div>

                        <div class="col-sm-7">
                            <div class="form-group">
                                <p class="form-control-static bg-gray">Saudação: {{ $data->saudacao }}</p>
                            </div>
                            <div class="form-group">
                                <p class="form-control-static bg-gray">Nome completo: {{ $data->nome }}</p>
                            </div>
                            <div class="form-group">
                                <p class="form-control-static bg-gray">Telefone: {{ $data->telefone }}</p>
                            </div>
                            <div class="form-group">
                                <p class="form-control-static bg-gray">E-mail: {{ $data->email }}</p>
                            </div>
                            <div class="form-group">
                                <p class="form-control-static bg-gray">D. Nascimento: {{ $data->data_nascimento }}</p>
                            </div>
                            <div class="form-group">
                                <p class="form-control-static bg-gray">Nota: {{ $data->nota }}</p>
                            </div>
                        </div><!-- /.row -->

                        <div class="box-footer ">
                            <a href="#" onclick="history.back()" class="btn btn-default"><i class="fa fa-fw fa-angle-left"></i> Voltar</a>
                            <button type="submit" class="btn btn-danger pull-right"><i class="fa fa-fw fa-trash-o"></i> Excluir</button>
                            <a href="{{ url('contato/edit/'.$data->id) }}" class="btn btn-primary pull-right"><i class="fa fa-fw fa-edit"></i> Editar</a>
                        </div>
            </div>
        </form>
    </div>
@endsection
