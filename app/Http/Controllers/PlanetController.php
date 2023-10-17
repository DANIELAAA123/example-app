<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function show($planet)
    {

    }
}
