<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenido') }} : {{  Auth::user()->name }} <br>
            {{ __('Aqui estan las ofertas que tenemos para ti.!')}}

        </h2>
    </x-slot>


    @if (session('success'))
<script>
    alert("{{ session('success') }}");
</script>
@endif

    <div class="py-6">
    <div class="max-w-sm mx-auto bg-white rounded-xl overflow-hidden shadow-lg md:max-w-5xl">
        <form action="{{ route('filtropost') }}" method="POST">
        @csrf
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">¿Alguna búsqueda específica?</div>
            <textarea class="text-gray-700 text-base w-full px-3 py-2 border rounded-lg focus:outline-none" rows="4" placeholder="Escribe aquí tu búsqueda..." name="filtro"></textarea>
        </div>
        <div class="px-6 py-4">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded" type="submit">filtrar</button>
        </div>

        </form>
    </div>
</div>





    <div class="py-6">
    <div class="container mx-auto">
        @foreach($ofertas as $oferta)
            <div class="bg-white rounded-3xl shadow-md mb-6 flex flex-col md:flex-row">
                <div class="w-full md:w-1/2 p-6 text-center md:border-r md:border-gray-300 md:rounded-l-3xl">
                    <h2 class="text-xl font-bold mb-2">{{ $oferta->titulo }}</h2>
                    <p class="text-gray-700 text-2xl">{{ $oferta->descripcion }}</p>
                </div>

                <div class="w-full md:w-1/2 p-6 text-center md:rounded-r-3xl">
                    <p class="text-gray-700">Requisitos: {{ $oferta->requisitos }}</p>
                    <p class="text-gray-700">Ubicación: {{ $oferta->ubicacion }}</p>
                    <p class="text-gray-700">Tiempo: {{ $oferta->tiempo }}</p>
                    <p class="text-gray-700">Estado: {{ $oferta->estado }}</p>
                    <p class="text-gray-700">Creado: {{ $oferta->created_at }}</p>

                    @php
                        $usuario = App\Models\User::find($oferta->user_id);
                    @endphp
                    <p class="text-gray-700">Publicado por: {{ $usuario->name }}</p>
                    <div class="mt-4 flex justify-between items-center">
                        <form action="{{route('postularse')}}" method="post">
                        <input type="hidden" name="id" value="{{$oferta->id}}">
                        @csrf
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">Postularse</button>
                        </form>

                        <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-6 rounded">Guardar oferta</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>




</x-app-layout>
