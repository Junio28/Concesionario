<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OriginalController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about_us()
    {
        return view('original.about-us');
    }

    public function coming_soon()
    {
        return view('original.coming-soon');
    }

    public function contact()
    {
        return view('original.contact');
    }

    public function single_post()
    {
        return view('original.single-post');
    }

    
    public function usuario($nombre, $edad)
    {
        return "Mi nombre es {$nombre} y mi edad es {$edad}";
    }
}
