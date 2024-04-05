<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mi Perfil') }}
        </h2>
    </x-slot>

    <div class="py-6">
    <div class="container mx-auto py-6">
    <h1 class="text-3xl font-bold text-center mb-6">Mi Perfil</h1>

    <div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden">
        <div class="md:flex">
            <div class="md:flex-shrink-0">
                <!-- Área para la foto de perfil -->
                <img class="h-48 w-full object-cover md:w-48" src="{{ asset('img/carnaval.png') }}" alt="Foto de perfil">
            </div>
            <div class="p-8">
                <!-- Información del usuario -->
                <h2 class="text-xl font-semibold">{{ $usuario->name }}</h2>
                <p class="text-gray-600">{{ $usuario->email }}</p>
                <!-- Otros campos del perfil -->
                <div class="mt-4">
                    <p class="text-gray-600">Fecha de Registro: {{ $usuario->created_at->format('d/m/Y') }}</p>
                    <!-- Otros campos del perfil -->
                </div>
            </div>
        </div>
    </div>
</div>

        
    </div>
</x-app-layout>
