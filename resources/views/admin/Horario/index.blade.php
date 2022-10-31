@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content_header')
    <h1>Lista de beneficios</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
<div class="card-header">
<a class="btn btn-primary " href="{{route('admin.Horario.create')}}">Crear Nuevo</a>
</div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>id</td>
                    <td>Horas</td>
                    <td>Dias</td>
                    <td colspan="2"></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($horarios as $horario)
                <tr>
                    <td>{{$horario->id}}</td>
                    <td>{{$horario->hora}}</td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm" href="{{route('admin.Horario.edit', $horario)}}">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.Horario.destroy', $horario)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop