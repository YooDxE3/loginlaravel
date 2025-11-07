<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstituicaoLoginController extends Controller
{
    /**
     * Exibe o formulário de login da instituição
     */
    public function showLoginForm()
    {
        return view('auth.login_instituicao');
    }

    /**
     * Realiza o login da instituição
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::guard('instituicao')->attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/instituicao');
        }

        return back()->withErrors([
            'email' => 'As credenciais fornecidas não foram encontradas.',
        ])->onlyInput('email');
    }

    /**
     * Faz logout da instituição
     */
    public function logout(Request $request)
    {
        Auth::guard('instituicao')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
