@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content_header')
    <h1>Editar usuario</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
    <div class="card-body">
        {!! Form::model($user , ['route' => ['admin.Usuario.update', $user], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre']) !!}

                @error('nombre')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Correo') !!}
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'ingrese el correo']) !!}

                @error('slug')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Contraseña') !!}
                {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'ingrese la Contraseña']) !!}
            </div>
            <div class="form-group">
                <p class="h5">Listado de roles</p>
                
                @foreach ($roles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class'=>'mr-1']) !!}
                            {{$role->name}}
                        </label>
                    </div>

                @endforeach
            </div>
          {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
          {!! Form::close() !!}
        <a class="btn btn-danger" href="{{route('admin.Usuario.index', $user)}}">Cancelar</a>
       
    </div>
</div>
@stop