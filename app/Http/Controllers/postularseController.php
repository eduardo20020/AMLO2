<?php

namespace App\Http\Controllers;

use App\Models\postulaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class postularseController extends Controller
{


    public function postularse(Request $request)
    {
        // Lógica para realizar la acción deseada

       $postulacion = new postulaciones();
       $postulacion->id_user = Auth::user()->id;
       $postulacion->id_oferta = $request->id;

       $postulacion->save();


        return redirect()->route('entrevista')->with('success', 'Oferta creada exitosamente');

        return back()->with('succes');
    }



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
        //
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
