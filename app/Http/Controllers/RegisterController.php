<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // GET /cadastro
    public function index()
    {
        return view('register');
    }

    // POST /cadastro
    public function store(RegisterRequest $request)
    {
        $user =User::query()->create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        auth()->login($user);

        return redirect()->route('site.dashboard');
    }
}
