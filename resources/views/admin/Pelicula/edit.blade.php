@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content_header')
    <h1>Editar Pelicula</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
    <div class="card-body">
    {!! Form::model($pelicula , ['route' => ['admin.Pelicula.update', $pelicula], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre']) !!}

                @error('nombre')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'ingrese el slug', 'readonly']) !!}

                @error('slug')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('sinopsis', 'Sinopsis') !!}
                {!! Form::text('sinopsis', null, ['class' => 'form-control', 'placeholder' => 'ingrese la sinopsis']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('director', 'Director') !!}
                {!! Form::text('director', null, ['class' => 'form-control', 'placeholder' => 'ingrese el director']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('reparto', 'Reparto') !!}
                {!! Form::text('reparto', null, ['class' => 'form-control', 'placeholder' => 'ingrese el Reparto]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('duracion', 'Duracion') !!}
                {!! Form::text('duracion', null, ['class' => 'form-control', 'placeholder' => 'ingrese la duracion']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('trailer_url', 'Trailer') !!}
                {!! Form::text('trailer_url', null, ['class' => 'form-control', 'placeholder' => 'ingrese el trailer']) !!}
            </div>
            
            
          {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}  

          <a class="btn btn-danger" href="{{route('admin.Pelicula.index', $pelicula)}}">Cancelar</a>
       
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

<script>

    $(document).ready( function() {
        $("#nombre").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });
</script>
@endsection