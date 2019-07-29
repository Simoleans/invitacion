<?php

namespace App\Http\Controllers;

use App\User;
use App\Invitacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $aceptadas = Invitacion::where('status',1)->count();

        $sinAceptar = Invitacion::where('status',0)->count();

        $pagadas = Invitacion::where('etiqueta',3)->count();

        $gratis = Invitacion::where('etiqueta',1)->count();

        $pagar = Invitacion::where('etiqueta',2)->count();

        return view('dashboard', ['users' => User::all(),'aceptadas' => $aceptadas,'sinAceptar' => $sinAceptar,'invitaciones' => Invitacion::all(),'pagadas' => $pagadas,'gratis'=>$gratis,'pagar' => $pagar]);
    }

    public function login(Request $request)
    {
        /*----------- LOGIN MANUAL , MODIFICABLE ----------*/
        $this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only(['email', 'password']))) {
            return redirect()->intended('dashboard');
        } else {
            return redirect()->route('login')->withErrors('¡Error! , Revise sus credenciales');
        }
    }

    public function logout()
    {
        /*---- funcion de salir/logout/cerrar sesion --*/
        Auth::logout();
        return redirect('/');
    }
}
