<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenido') }} : {{  Auth::user()->name }} <br>
            {{ __('Aqui estan las ofertas que tenemos para ti.!')}}

        </h2>
    </x-slot>

    <div class="py-6">
    <div class="container mx-auto">
        @foreach($ofertas as $oferta)
            <div class="bg-white rounded-lg shadow-md mb-6">
                <div class="p-6 text-center">
                    <h2 class="text-xl font-bold mb-2 ">{{ $oferta->titulo }}</h2>
                    <p class="text-gray-700">{{ $oferta->descripcion }}</p>
                    <p class="text-gray-700 mt-2">Requisitos: {{ $oferta->requisitos }}</p>
                    <p class="text-gray-700">Ubicación: {{ $oferta->ubicacion }}</p>
                    <p class="text-gray-700">Tiempo: {{ $oferta->tiempo }}</p>
                    <p class="text-gray-700">Creado: {{ $oferta->created_at }}</p>

                    @php
                        $usuario = App\Models\User::find($oferta->user_id);
                    @endphp
                    <p class="text-gray-700">Publicado por: {{ $usuario->name }}</p>
                    <div class="mt-4 flex justify-between items-center px-20">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">Postularse</button>
                        <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-6 rounded">Guardar oferta</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


</x-app-layout>
