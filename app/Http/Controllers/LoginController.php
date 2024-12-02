<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;

class LoginController extends BaseController
{
    public function create()
    {
        return Inertia::render('Auth/Login');
    }

    public function store()
    {
        $attributes = request()->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );

        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages(['email' =>'Your provided credentials coud not be verified']);
        }

        session()->regenerate();

        return redirect('/user/'. auth()->id() .'/todos')->with('Sucesso', 'Bem Vindo de Volta!');
    }

    public function destroy()
    {
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        auth()->logout();
        return redirect('/')->with('Sucesso', 'Até Mais!');
    }
}
