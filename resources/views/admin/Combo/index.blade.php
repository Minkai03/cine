@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content_header')
    <h1>Lista de combos</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
<div class="card-header">
<a class="btn btn-primary " href="{{route('admin.Combo.create')}}">Crear Nuevo</a>
</div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>id</td>
                    <td>Nombre</td>
                    <td>Descripcion</td>
                    <td>Precio</td>
                    <td colspan="2"></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($combos as $combo)
                <tr>
                    <td>{{$combo->id}}</td>
                    <td>{{$combo->nombre}}</td>
                    <td>{{$combo->descripcion}}</td>
                    <td>{{$combo->precio}}</td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm" href="{{route('admin.Combo.edit', $combo)}}">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.Combo.destroy', $combo)}}" method="POST">
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