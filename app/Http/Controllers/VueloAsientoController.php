<?php

namespace App\Http\Controllers;

use Iluminate\Http\Request;
use App\VueloAsiento;


class VueloAsientoController extends Controller
{
    public function index()
    {
        $vueloAsientos = VueloAsiento::all();
        return view('vueloAsientos.inicio', compact('vueloAsientos'));
    }

}

