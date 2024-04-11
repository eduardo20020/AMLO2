@extends('layouts.base')

@section('main')
<div class="container mx-auto my-8 flex justify-center items-center">
  <!-- Contenido centrado vertical y horizontalmente -->
  <p class="text-lg">Somos un equipo apasionado de cinco estudiantes de la Universidad Politécnica de García, en el octavo cuatrimestre de nuestros estudios en el año 2024. Nos unimos con el propósito de crear una plataforma innovadora que facilite la conexión entre estudiantes comprometidos y organizaciones que buscan impulsar el cambio social a través del servicio comunitario. Con nuestra pasión por el impacto positivo y nuestra dedicación, estamos transformando la forma en que se lleva a cabo el servicio social.</p>

</div>

<div class="container mx-auto flex justify-center items-center">
  <div class="items-center justify-center">
          <img src="{{ asset('img/morra.jpg') }}" class=" sm:w-64 md:w-96 lg:w-128 xl:w-160 2xl:w-192 rounded-3xl shadow-lg"/>
  </div>
</div>
@endsection