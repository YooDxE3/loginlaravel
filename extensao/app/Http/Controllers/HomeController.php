<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        // Usa o middleware de autenticação normalmente
        $this->middleware('auth');
    }

    /**
     * Exibe a página inicial após login.
     */
    public function index()
    {
        return view('home');
    }
}
