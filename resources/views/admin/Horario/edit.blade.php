@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content_header')
    <h1>Editar Beneficio</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
    <div class="card-body">
    {!! Form::model($horario , ['route' => ['admin.Horario.update', $horario], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('hora', 'Horas') !!}
                {!! Form::text('hora', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre']) !!}

                @error('nombre')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('dias_id', 'Dias') !!}
                {!! Form::text('dias_id', $dia, null, ['class' => 'form-control']) !!}
            </div>
            
          {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}  
       
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

