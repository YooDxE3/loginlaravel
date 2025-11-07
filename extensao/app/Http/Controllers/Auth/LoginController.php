<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Para onde redirecionar o usuário após login
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Define middlewares e construtor
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
