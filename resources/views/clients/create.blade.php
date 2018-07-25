@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Novo cliente</h3>

        {!! Form::open(['route'=>'clients.store', 'class'=>'form']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nome:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cpf', 'CPF:') !!}
            {!! Form::text('cpf', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar', ['class'=>'btn btn-primary']) !!}
            <a type="button" name="cancelar" href="{{ route('clients.index') }}" class="btn btn-warning" >Cancelar</a>
        </div>

        {!! Form::close() !!}

    </div>

@endsection
