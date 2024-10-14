<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Inertia\Inertia;

class LoginController extends BaseController
{
    public function login()
    {
        return Inertia::render('Auth/Login');
    }

    public function register()
    {
        return inertia::render('Auth/Register');
    }

//    public function create()
//    {
//
//    }
}
