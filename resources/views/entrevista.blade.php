@extends('layouts.base')

@section('main')
<div class="bg-gray-100 h-screen flex justify-center items-center">
    <div class="bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-4">Formulario</h2>
        <form action="#" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="edad">Edad:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="edad" type="number" placeholder="Ingrese su edad">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Seleccione sus 3 materias favoritas en orden:</label>
                <div>
                    <select name="materia1" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:border-indigo-500 mb-4">
                        <option value="" disabled selected>Seleccione la primera materia favorita</option>
                        <option value="matematicas">Matemáticas</option>
                        <option value="idiomas">Idiomas</option>
                        <option value="ingenierias">Ingenierías</option>
                        <option value="automotriz">Automotriz</option>
                        <option value="ciencias_sociales">Ciencias Sociales</option>
                        <option value="ciencias_naturales">Ciencias Naturales</option>
                    </select>
                    <select name="materia2" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:border-indigo-500 mb-4">
                        <option value="" disabled selected>Seleccione la segunda materia favorita</option>
                        <option value="matematicas">Matemáticas</option>
                        <option value="idiomas">Idiomas</option>
                        <option value="ingenierias">Ingenierías</option>
                        <option value="automotriz">Automotriz</option>
                        <option value="ciencias_sociales">Ciencias Sociales</option>
                        <option value="ciencias_naturales">Ciencias Naturales</option>
                    </select>
                    <select name="materia3" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:border-indigo-500 mb-4">
                        <option value="" disabled selected>Seleccione la tercera materia favorita</option>
                        <option value="matematicas">Matemáticas</option>
                        <option value="idiomas">Idiomas</option>
                        <option value="ingenierias">Ingenierías</option>
                        <option value="automotriz">Automotriz</option>
                        <option value="ciencias_sociales">Ciencias Sociales</option>
                        <option value="ciencias_naturales">Ciencias Naturales</option>
                    </select>
                </div>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Enviar
            </button>
        </form>
    </div>
</div>
@endsection
