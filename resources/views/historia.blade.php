@extends('layouts.base')


@section('main')
<div class="container mx-auto my-8 flex justify-center items-center">
  <!-- Contenido centrado vertical y horizontalmente -->
  <p class="text-lg">Nuestra plataforma nació de una visión compartida entre cinco estudiantes de la Universidad Politécnica de García en el año 2023. Impulsados por el deseo de hacer una diferencia significativa en nuestra comunidad, nos unimos para crear una solución innovadora que abordara la desconexión entre estudiantes en búsqueda de oportunidades de servicio social y organizaciones necesitadas de voluntarios. Después de meses de arduo trabajo, investigación y desarrollo, lanzamos nuestra plataforma en el año 2024, con el objetivo de fomentar el compromiso cívico y promover un impacto positivo en la sociedad. Desde entonces, hemos estado dedicados a mejorar y expandir nuestra plataforma para brindar a más personas la oportunidad de contribuir al cambio social de manera significativa.</p>
</div>


<div class="container mx-auto flex justify-center items-center">
  <div class="items-center justify-center">
          <img src="{{ asset('img/morra2.jpg') }}" class=" sm:w-64 md:w-96 lg:w-128 xl:w-160 2xl:w-192 rounded-3xl shadow-lg"/>
  </div>
</div>
@endsection