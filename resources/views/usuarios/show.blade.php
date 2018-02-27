@extends('layout.template')

@section('title')
Dados do Usuários Logado
@endsection

@section('content')
<section class="content-header">
    <h1>
        Dados do Usuários Logado
        <small>Teste Questa</small>
    </h1>
    <ol class="breadcrumb">
        <li><i class="fa fa-users"></i> Usuários</li>
    </ol>
</section><br>
<div class="col-lg-12 centralizer box box-primary">
    <div class="form-group col-sm-12">
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
                <h3 class="box-title">Dados do Usuários Logado</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
                @include('mensagens')
                <table class="table table-bordered table-striped table-hover">
                        <tr>
                            <th>Nome</th><td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <th>E-mail</th><td>{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <th>Data de Nacimento</th><td>{{ dataSQLtoPTbr(Auth::user()->data_nascimento) }}</td>
                        </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

