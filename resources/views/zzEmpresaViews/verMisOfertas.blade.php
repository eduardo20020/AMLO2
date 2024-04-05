<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Aqui puedes ver las ofertas que has creado') }}
        </h2>
    </x-slot>

    <div class="py-6 flex justify-center">
    <div class="container">
        <h1 class="text-3xl font-bold text-center mb-6">Mis ofertas</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">
            @foreach ($misOfertas as $oferta)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="p-4">
                    <h2 class="text-xl font-bold">{{ $oferta->titulo }}</h2>
                    <p class="text-gray-600">{{ $oferta->descripcion }}</p>
                    <p class="text-gray-600 mt-2">Requisitos: {{ $oferta->requisitos }}</p>
                    <p class="text-gray-600">Ubicación: {{ $oferta->ubicacion }}</p>
                    <p class="text-gray-600">Tiempo: {{ $oferta->tiempo }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


</x-app-layout>