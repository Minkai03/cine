<x-app-layout>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-6">
        
        <div class="grid  gap-4">
                @foreach ($peliculas as $pelicula)
                    <div class="row">
                        <h1 class="text-4x1 leading-8 font-bold">
                        <a href="{{route('Cartelera.show', $pelicula)}}">
                            {{$pelicula->nombre}}
                        </a></h1>
                    </div>
                    
                    <article class="w-full h-80 bg-cover bg-center">
                        <img src="{{$pelicula->p_image->url}}" alt="hola">
                    </article>
                @endforeach 
        </div>
    </div>
</x-app-layout>  