@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content_header')
    <h1>Crear nuevo beneficio</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.Horario.store']) !!}
            <div class="form-group">
                {!! Form::label('hora', 'Horas') !!}
                {!! Form::text('hora', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre']) !!}

                @error('nombre')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('dias_id', 'Dias') !!}
                {!! Form::select('dias_id', $dia, null, ['class' => 'form-control']) !!}
            </div>
      
            
          {!! Form::submit('Crear clasificacion', ['class' => 'btn btn-primary']) !!}  
        {!! Form::close() !!}
    </div>
</div>

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