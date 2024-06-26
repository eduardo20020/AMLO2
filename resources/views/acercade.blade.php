@extends('layouts.base')
@section('main')

<div class="container mx-auto my-4 flex justify-center items-center">
  <h1 class="text-4xl font-bold my-2">Acerca de</h1>
</div>

<div class="container mx-auto my-8 flex justify-center items-center">
  <!-- Contenido centrado vertical y horizontalmente -->
  <p class="text-lg">En nuestra sección "Acerca de", te presentamos la esencia de nuestra plataforma, un espacio digital donde convergen la pasión por el cambio social y la búsqueda de oportunidades significativas. Nuestra historia se teje con el propósito de cerrar la brecha entre estudiantes deseosos de contribuir y organizaciones con necesidades de apoyo. Desde nuestro inicio, hemos estado comprometidos con la construcción de puentes entre el talento estudiantil y las causas que impulsan el progreso en nuestras comunidades. Inspirados por la idea de un mundo más solidario y colaborativo, hemos desarrollado esta plataforma con el objetivo de simplificar el proceso de encontrar y participar en proyectos de servicio social. Nuestra visión es crear un ecosistema donde cada acto de servicio tenga un impacto tangible y donde cada voluntario encuentre un lugar donde su compromiso sea valorado y transformador. Únete a nosotros y sé parte de esta comunidad que trabaja incansablemente por un futuro más brillante y solidario para todos.</p>
</div>



<div class="container mx-auto flex justify-center items-center">
  <div class="items-center justify-center">
          <img src="{{ asset('img/salma.jpg') }}" class=" sm:w-64 md:w-96 lg:w-128 xl:w-160 2xl:w-192 rounded-3xl shadow-lg"/>
  </div>
</div>
@endsection