<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

            // Obtener el usuario autenticado
            $user = $request->user();

            // Verificar el rol del usuario y redirigir en consecuencia
            if ($user->rol === 'empresa') {
                // Redirigir al panel de control de la empresa
                return redirect()->route('dashboardEmpresa');
            } elseif ($user->rol === 'pasante') {
                // Redirigir al panel de control del pasante
                return redirect()->route('dashboardPasante');
            }

            // Por defecto, redirigir a una página general
            return redirect()->route('dashboard.general');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
