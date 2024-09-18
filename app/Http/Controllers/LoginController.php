<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\LoginService;
use Auth;

class LoginController extends Controller
{
    protected $loginService;

    public function __construct
    (LoginService $loginService)
    {
        $this->loginService = $loginService;
    }
    public function create()
    {
        return view('pages.login');
    }

    public function login(LoginRequest $loginRequest)
    {
        if(!$this->loginService->authenticate($loginRequest->validated())){
            return redirect()->route('login.create')->withErrors([
                'invalid'=>'E-mail ou senha incorretos'
            ]);
        }

        return redirect()->route('home.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.create');
    }
}
