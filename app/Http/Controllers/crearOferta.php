<?php

namespace App\Http\Controllers;

use App\Models\oferta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class crearOferta extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validar los datos del formulario
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'ubicacion' => 'required|string|max:255',
            'tiempo' => 'required|string|max:255',
        ]);

            // Crear una nueva instancia del modelo Oferta con los datos del formulario
            $oferta = new oferta();
            $oferta->titulo = $request->input('titulo');
            $oferta->descripcion = $request->input('descripcion');
            $oferta->requisitos = $request->input('requisitos');
            $oferta->ubicacion = $request->input('ubicacion');
            $oferta->tiempo = $request->input('tiempo');
            $oferta->user_id = Auth::user()->id;
            
            // Guardar la oferta en la base de datos
            $oferta->save();
            return redirect()->route('verMisOfertas')->with('success', 'Oferta creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
