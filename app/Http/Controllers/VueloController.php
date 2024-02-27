<?php

namespace App\Http\Controllers;

use App\Vuelo;
use Illuminate\Http\Request;

class VueloController extends Controller
{
    public function index()
    {
        $vuelos = Vuelo::all();
        return view('vuelos.inicio', compact('vuelos'));
    }
}
