@extends('adminlte::page')

@section('title', 'TicketUniverse')

@section('content_header')
    <h1>Lista de peliculas</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
<div class="card-header">
<a class="btn btn-primary " href="{{route('admin.Pelicula.create')}}">Crear Nuevo</a>
</div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>id</td>
                    <td>Nombre</td>
                    <td>Sipnosis</td>
                    <td>Director</td>
                    <td>Reparto</td>
                    <td>Duracion</td>
                    <td>Trailer_url</td>
                    <td>Sala</td>
                    <td>Genero</td>
                    <td>Clasificacion</td>
                    <td>Horario</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($peliculas as $pelicula)
                <tr>
                    <td>{{$pelicula->id}}</td>
                    <td>{{$pelicula->nombre}}</td>
                    <td>{{$pelicula->sinopsis}}</td>
                    <td>{{$pelicula->director}}</td>
                    <td>{{$pelicula->reparto}}</td>
                    <td>{{$pelicula->duracion}}</td>
                    <td>{{$pelicula->trailer_url}}</td>
                    <td>{{$pelicula->sala->nombre}}</td>
                    <td>{{$pelicula->genero->nombre}}</td>
                    <td>{{$pelicula->clasificacion->nombre}}</td>
                    <td></td>
                    </tr>
                    <tr >
                        <td>
                        <a class="btn btn-primary btn-sm" href="{{route('admin.Pelicula.edit', $pelicula)}}">Editar</a>
                    </td>
                    <td >
                        <form action="{{route('admin.Pelicula.destroy', $pelicula)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                        </td>
                    </tr>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop