<x-app-layout>
    
<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-6">
    <h1 class="text-4x1 font-bold text-gray-600">
{{$pelicula->nombre}}
    </h1>
    <br>
    <div>
    <img src="{{$pelicula->image->url}}" alt=""></div><br>
    <div>
        {{$pelicula->id}}
    </div>
    <br>
    <div class="row">
    <h1>Sipnosis: {{$pelicula->sinopsis}}</h1>
    </div>
    <br>
    <div>
        <h1>Generos: {{$pelicula->genero->nombre}}</h1>
    </div>
    <br>
    <div>
        <h1>Clasificacion: {{$pelicula->clasificacion->nombre}}</h1>
    </div>
    <br>
    <div>
    <h1>Director: {{$pelicula->director}}</h1>
    </div>
    <br>
    <div>
    <h1>Reparto: {{$pelicula->reparto}}</h1>
    </div>
    <br>
    <div>
    <h1>Duracion: {{$pelicula->duracion}}</h1> 
    </div>
    <br>
    <div>
    <h1>horario: {{$pelicula->horario->horario}} {{$pelicula->horario->fecha}}</h1> 
    </div>
    <br>
    <div>
    <h1>sala: {{$pelicula->sala->id}} </h1> 
    </div>
    <br>
    <div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/EDK2FtU5oxg"></iframe>
    </div>


</div>


</x-app-layout>