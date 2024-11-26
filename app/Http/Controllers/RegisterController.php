<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use User\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return inertia::render('Auth/Register');
    }

    public function store(Request $request)
    {
       $request->validate(
            [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users,email',
                'password' => 'required|min:3|max:255'
            ]
        );

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        auth()->login($user);

        return redirect("/user/{$user->id}/todos")->with('success', 'Your account has been created.');
    }
}
