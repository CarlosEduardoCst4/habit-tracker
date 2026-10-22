<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    //GET
    public function index()
    {
        $name = 'Carlos';
        $habits = ['ler', 'estudar', 'correr'];

        return view('home', compact('name', 'habits'));
    }
}
