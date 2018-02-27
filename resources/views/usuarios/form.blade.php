    @if ($errors->any())
    <div class="alert alert-danger alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>

        <ul class="alert">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
        {{-- Campo Nome do Profissional --}}  
        <div class="form-group col-lg-6"> 
            {!! Form::label('profissional', 'Profissional: ') !!}
            {!! Form::text('profissional', null, ['class'=>'form-control']) !!}
        </div>
             
        {{-- Campo Procedimento --}}  
        <div class="form-group col-lg-6"> 
            {!! Form::label('procedimento', 'Procedimento: ') !!}
            {!! Form::text('procedimento', null, ['class'=>'form-control']) !!}
        </div>
             
        {{-- Campo Nome do Cliente --}}  
        <div class="form-group col-lg-5"> 
            {!! Form::label('cliente_nome', 'Nome do Cliente: ') !!}
            {!! Form::text('cliente_nome', null, ['class'=>'form-control']) !!}
        </div>
             
        {{-- Campo Contato do Cliente --}}  
        <div class="form-group col-lg-5"> 
            {!! Form::label('cliente_contato', 'Contato do Cliente: ') !!}
            {!! Form::text('cliente_contato', null, ['class'=>'form-control']) !!}
        </div>
             
        {{-- Campo Valor --}}  
        <div class="form-group col-lg-2"> 
            {!! Form::label('valor', 'Valor: ') !!}
            {!! Form::text('valor', null, ['class'=>'form-control']) !!}
        </div>
             

