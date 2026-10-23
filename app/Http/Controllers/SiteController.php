<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    //GET
    public function index()
    {
        $name = auth()->user()?->name ?? 'visitante';
        $habits = ['ler', 'estudar', 'correr'];

        return view('home', compact('name', 'habits'));
    }

    //Get /dashboard
    public function dashboard()
    {
        

        return view('dashboard');
    }
}
