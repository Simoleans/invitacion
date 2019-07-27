<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invitacion;

class EscanearController extends Controller
{
    public function index()
    {
    	return view('escanear.index');
    }

    public function buscar(Request $request)
    {
    	$invitacion = Invitacion::where('codigo',$request->codigo)->first();

    	return response()->json($invitacion);
    }
}
