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
    {!! Form::model($beneficio , ['route' => ['admin.Beneficio.update', $beneficio], 'method' => 'put']) !!}
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
                {!! Form::label('descripcion', 'Descripcion') !!}
                {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'ingrese la descripcion']) !!}
                
                @error('descripcion')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('descuento', 'Descuento') !!}
                {!! Form::text('descuento', null, ['class' => 'form-control', 'placeholder' => 'ingrese la descuento']) !!}

                @error('descuento')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            
          {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}  

          <a class="btn btn-danger" href="{{route('admin.Beneficio.index', $beneficio)}}">Cancelar</a>
       
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