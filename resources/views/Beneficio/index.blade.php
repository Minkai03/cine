<style>
    .main{ margin: auto;
        margin-top: 60px;
        width: 1200;
        height: 1080;
        background-color:RoyalBlue;
    }
        
</style>
<div class="main">
<x-app-layout>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-6">
        
        <div class="grid  gap-4">
                @foreach ($beneficios as $beneficio)
                    <div class="row">
                        <h1 class="text-4x1 leading-8 font-bold">
                            {{$beneficio->nombre}}
                        </a></h1>
                    </div>
                    <div > Descripcion: {{$beneficio->descripcion}} </div>
                @endforeach 
        </div>
    </div>
</x-app-layout>
</div>  