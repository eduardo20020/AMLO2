@extends('layouts.base')
@section('main')


<div class="container mx-auto my-6 px-4">
  <div class="flex justify-center text-center">

    <div class="w-1/2 mx-2">
      <div class="items-center justify-center">
        <img src="{{ asset('img/carnaval.png') }}" class=" sm:w-64 md:w-96 lg:w-128 xl:w-160 2xl:w-192"/>
      </div>
    </div>

    <div class="w-1/2 mx-2 my-12">
      <div class="container">
        <h1 class="text-4xl font-bold my-4">¿Por que escogernos?</h1>
        <p>Descubre oportunidades de impacto social. Conectamos estudiantes con organizaciones que necesitan voluntarios y empresas comprometidas con el cambio. Encuentra el lugar perfecto para tu servicio social o colabora con proyectos inspiradores. ¡Únete a nuestra plataforma hoy mismo y haz la diferencia!</p>
        
        <header class="text-center flex justify-center text-center my-8">
          @if (Route::has('login'))
            <nav class="flex flex-1 justify-center gap-6">
              @auth

              
              <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Cerrar sesion') }}
                    </x-responsive-nav-link>
                </form>





              @else
                  <a
                      href="{{ route('login') }}"
                      class="rounded-md px-3 py-2 text-black bg-blue-300 border"
                  >
                      Inicia sesion
                  </a>

                  @if (Route::has('register'))
                      <a
                          href="{{ route('register') }}"
                          class="rounded-md px-3 py-2 text-black bg-blue-300 border"
                      >
                          Registrate
                      </a>
                  @endif
              @endauth
            </nav>
          @endif
        </header>
      </div>
    </div>

  </div>
</div>


@endsection