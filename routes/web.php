<?php

use App\Http\Controllers\crearOferta;
use App\Http\Controllers\filtroController;
use App\Http\Controllers\postularseController;
use App\Http\Controllers\ProfileController;
use App\Models\oferta;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//////links de la barra de navegacion xd
Route::view('/nosotros','nosotros')->name('nosotros');
Route::view('/historia','historia')->name('historia');
Route::view('/acercade','acercade')->name('acercade');



////////////////////////////////la autenticacion de breeze//////////////////////////////////////////////////

Route::get('/dashboardEmpresa', function () {
    $userId = Auth::id();
    $ofertas = oferta::where('user_id', $userId)->get();
    return view('dashboardEmpresa',['misOfertas'=>$ofertas]);
})->middleware(['auth', 'verified'])->name('dashboardEmpresa');

Route::get('/dashboardEmpresa/crearOferta', function () {
    return view('zzEmpresaViews.crearOferta',['rol'=>Auth::user()->rol]);
})->middleware(['auth', 'verified'])->name('crearOferta');

Route::post('/dashboardEmpresa/crearOferta', [crearOferta::class,'store'])->middleware(['auth', 'verified'])->name('crearOfertapost');






Route::get('/dashboardEmpresa/verMisOfertas', function () {
    $userId = Auth::id();
    $ofertas = oferta::where('user_id', $userId)->get();
    return view('zzEmpresaViews.verMisOfertas',['misOfertas'=>$ofertas]);
})->middleware(['auth', 'verified'])->name('verMisOfertas');

Route::get('/dashboardEmpresa/miPerfil', function () {
    return view('zzEmpresaViews.miPerfil',['usuario'=>Auth::user()]);
})->middleware(['auth', 'verified'])->name('miPerfil');


///////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/dashboardPasante', function () {
    $ofertas = oferta::inRandomOrder()->get();
    return view('dashboardPasante',['ofertas'=>$ofertas]);
})->middleware(['auth', 'verified'])->name('dashboardPasante');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::post('/filtroPost', [filtroController::class, 'filtro'])->name('filtropost');

Route::post('/postularse', [postularseController::class, 'postularse'])->name('postularse');


require __DIR__.'/auth.php';
