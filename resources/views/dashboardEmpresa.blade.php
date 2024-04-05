<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenido') }} :  {{  Auth::user()->name; }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-sm mx-auto bg-white rounded-xl overflow-hidden shadow-lg md:max-w-5xl">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Crear Nueva Oferta</div>
                <p class="text-gray-700 text-base">
                ¿Deseas crear una nueva oferta? Haz clic en el botón a continuación para empezar.
                </p>
            </div>
            <div class="px-6 py-4">
            <a href="{{ route('crearOferta') }}">
                <button class="bg-blue-300 hover:bg-blue-700 text-black py-2 px-4 rounded">
                Crear Oferta
                </button>
            </a>
            </div>
        </div>
    </div>

    <div class="container mx-auto">
    <h1 class="text-3xl font-bold text-center mb-6">Mis ofertas</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
        @foreach ($misOfertas as $oferta)
        <div class="max-w-xs sm:max-w-sm lg:max-w-md xl:max-w-lg mx-auto">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <!-- Contenido de la oferta -->
                <div class="p-4">
                    <h2 class="text-xl font-bold">{{ $oferta->titulo }}</h2>
                    <p class="text-gray-600">{{ $oferta->descripcion }}</p>
                    <p class="text-gray-600 mt-2">Requisitos: {{ $oferta->requisitos }}</p>
                    <p class="text-gray-600">Ubicación: {{ $oferta->ubicacion }}</p>
                    <p class="text-gray-600">Tiempo: {{ $oferta->tiempo }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>




</x-app-layout>
