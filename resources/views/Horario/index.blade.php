<style>
    .main{
        margin: auto;
        margin-top: 60px;
        width: 1200;
        height: 1280;
        background-color: RoyalBlue;
    }
</style>
 <div class="main">
    <x-app-layout>
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-6">   
            <div class="grid  gap-4">
                @foreach ($peliculas as $pelicula)
                <h1 class="text-4x1 leading-8 font-bold">
                <!-- Peliculas: {{$pelicula->nombre}} --></h1>
                @endforeach @foreach ($horarios as $horario)
                <div class="row">
                <h1 class="text-4x1 leading-8 font-bold">
                Horario: {{$horario->fecha}}{{$horario->hora}}</h1>
                @endforeach 
                </div>
            </div>  
        </div>
    </x-app-layout>  
</div>