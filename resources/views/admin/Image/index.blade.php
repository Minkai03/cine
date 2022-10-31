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
<a class="btn btn-primary " href="{{route('admin.Clasificacion.create')}}">Crear Nuevo</a>
</div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>id</td>
                    <td>Nombre</td>
                    <td>Descripcion</td>
                    <td colspan="2"></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($clasificacions as $clasificacion)
                <tr>
                    <td>{{$clasificacion->id}}</td>
                    <td>{{$clasificacion->nombre}}</td>
                    <td>{{$clasificacion->descripcion}}</td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm" href="{{route('admin.Clasificacion.edit', $clasificacion)}}">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.Clasificacion.destroy', $clasificacion)}}" method="POST">
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