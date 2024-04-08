<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('filtros de busqueda') }} : {{  Auth::user()->name }} <br>
        </h2>
    </x-slot>


{{$filtro}}
</x-app-layout>
