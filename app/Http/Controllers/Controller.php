<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class TipoAsientoController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;
    public function inicio (){
        return view('inicio');
    }
    public function tipoAsiento (){
        return view('tiposAsientos');
    }

    public function vueloAsiento (){
        return view('vueloAsientos');
    }

    public function vuelo (){
        return view('vuelos');
    }


}


