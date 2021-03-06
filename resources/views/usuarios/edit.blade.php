@extends('layout.template')

@section('title')
Editar Usuário 
@endsection
@section('content')
<section class="content-header">
    <h1>
        Editar Usuário
        <small>Teste Questa</small>
    </h1>
    <ol class="breadcrumb">
        <li><i class="fa fa-users"></i> <a style="color: #3c8dbc" href="{{ url('usuarios/index')}}"> Usuários </a> <i class="fa fa-angle-double-right"></i> Editar </li>
    </ol>
</section><br>
<div class="col-lg-12 centralizer box box-primary">
    <div class="box-header">
        <h3>Editar Usuário</h3>  
    </div>
    @include('mensagens')

    {!! Form::model($usuarios, ['route' => ['usuarios.update', $usuarios->id], 'method' => 'put']) !!}
    
    {{ csrf_field() }}    
     
    <div class="row">
        {{-- Campo Nome --}} 
        <div class="form-group col-lg-7"> 
            {!! Form::label('name', 'Nome: ') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        {{-- Campo E-mail --}}  
        <div class="form-group col-lg-5"> 
            {!! Form::label('email', 'E-mail: ') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>
    </div>
    
    <div class="row">
        {{-- Campo CPF --}}  
        <div class="form-group col-lg-4"> 
            {!! Form::label('cpf', 'CPF: ') !!}
            {!! Form::text('cpf', null, ['class'=>'form-control cpf']) !!}
        </div>
        
        {{-- Campo Data de Nascimento --}}  
        <div class="form-group col-lg-4"> 
            <label>Data de Nascimento:</label>

            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                {!! Form::text('data_nascimento', dataSQLtoPTbr($usuarios->data_nascimento), ['class'=>'form-control', 'id' => 'data_nascimento', 'data-inputmask' => "'alias': 'dd/mm/yyyy'"]) !!}
            </div>
        </div>

        {{-- Campo Ativo --}}  
        <div class="form-group col-lg-4"> 
            {!! Form::label('ativo', 'Ativo ') !!}
            {!! Form::select('ativo', ['Sim' => 'Sim', 'Não' => 'Não'], null, ['class'=>'form-control']) !!}
        </div>  
    </div>
    
    <div class="row">
        {{-- Campo Senha --}}  
        <div class="form-group col-lg-6"> 
            {!! Form::label('password', 'Senha: ') !!}
            <input class="form-control" name="password" type="password" value="">
        </div>        
        
        {{-- Campo Confirmar Senha --}}  
        <div class="form-group col-lg-6"> 
            {!! Form::label('password_confirmation', 'Confirmar Senha: ') !!}
            <input class="form-control" name="password_confirmation" type="password" value="">
        </div>
    </div>

    <div class="form-group col-sm-12">
        {{-- Botões --}}  
        {{-- Botão de Voltar --}}          
        <a class="btn btn-danger" href="{{ route('usuarios.index')}}">Cancelar</a>

        {{-- Botão de Enviar --}}  
        {!! Form::submit('Salvar Dados', ['class'=>'btn btn-primary pull-right']) !!}
    </div><br>

    {!! Form::close() !!}
</div>

@endsection