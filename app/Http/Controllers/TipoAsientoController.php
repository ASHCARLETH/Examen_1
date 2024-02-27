<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoAsiento;

class TipoAsientoController extends Controller
{
    public function index()
    {
        $tipoAsientos = TipoAsiento::all();
        return view('tipo_asientos.index', compact('tipoAsientos'));
    }

   
    public function create() 
    {
        return view('tipo_asientos.create');
    }

   
    public function store(Request $request)
    {

        TipoAsiento::create($request->all());

        return redirect()->route('tipo_asientos.inicio')
            ->with('success', 'Tipo de asiento creado exitosamente');
    }

}
