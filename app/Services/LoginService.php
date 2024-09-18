<?php

namespace App\Services;
use Auth;

class LoginService
{
    public function authenticate(array $userCredentials):bool
    {
        if(!Auth::attempt($userCredentials)){
            return false;
        }
        return true;
    }
}