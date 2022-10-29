<x-app-layout>
    <div class="bg-pink-900 mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-6">
        
        <div class="grid  gap-4">
                @foreach ($combos as $combo)
                    <div class="row">
                        <h1 class="text-4x1 leading-8 font-bold">
                            {{$combo->nombre}}
                        </a></h1>
                    </div>
                    
    <div class="row">
    <h1>Descripcion: {{$combo->descripcion}}</h1>
    </div> 
    <div>
    <h1>Precio: {{$combo->precio}}</h1>
    </div>

                    <article class="w-full h-80 bg-cover bg-center">
                        <img src="{{$combo->image->url}}" alt="hola">
                    </article>
                @endforeach 
        </div>

    
    </div>

    </div>
    </x-app-layout>  