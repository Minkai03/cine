@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content_header')
    <h1>Lista de Usuarios</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
<div class="card-header">
<a class="btn btn-primary " href="{{route('admin.Usuario.create')}}">Crear Nuevo</a>
</div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>id</td>
                    <td>Nombre</td>
                    <td>Correo</td>
                    <td>Contraseña</td>
                    <td>Roles</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td></td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm" href="{{route('admin.Usuario.edit', $user)}}">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.Usuario.destroy', $user)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" onclick="return confirm('¿Esta seguro de querer eliminarlo?')" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop