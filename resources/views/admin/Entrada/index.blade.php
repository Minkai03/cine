@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content_header')
    <h1>Lista de entradas</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
<div class="card-header">
<a class="btn btn-primary " href="{{route('admin.Entrada.create')}}">Crear Nuevo</a>
</div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>id</td>
                    <td>Nombre</td>
                    <td>Precio</td>
                    <td colspan="5"></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($entradas as $entrada)
                <tr>
                    <td>{{$entrada->id}}</td>
                    <td>{{$entrada->nombre}}</td>
                    <td>{{$entrada->precio}}</td>
                    <td></td>
                    <td width="20px">
                        <form action="{{route('admin.Entrada.destroy', $entrada)}}" method="POST">
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