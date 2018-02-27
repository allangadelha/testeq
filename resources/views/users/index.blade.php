@extends('layout.template')

@section('title')
Lista de Usuários
@endsection

@section('content')
<section class="content-header">
    <h1>
        Lista de Usuários
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
                <h3 class="box-title">Lista de Usuários</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
                @include('mensagens')
                <table id="usuarioss" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Ativo</th>
                            <th>Administrador</th>
                            <th style="text-align: center; width: 10%">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                <a class="btn btn-primary pull-right" href="">
                                    <span class="fa fa-edit"></span>
                                </a>
                                <a OnClick="return confirm('Deseja mesmo excluir? ESTÁ AÇÃO É IRREVERSÍVEL')"
                                   class="btn btn-danger" href="" >
                                    <span class="fa fa-trash"></span>
                                </a>

                            </td>
                        </tr>  
                                             
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

