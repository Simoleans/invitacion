<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invitacion;
use App\Mail\InvitacionMail;

class InvitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invitaciones = Invitacion::where('user_id',\Auth::user()->id)->get();

        return view('invitacion.index',['invitaciones' => $invitaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dump($request->all());

        $invitacion = new Invitacion;
        $invitacion->fill($request->all());

        if ($invitacion->save()) {
            //dd($invitacion);
            \Mail::to($request->email)
            ->send(new InvitacionMail($invitacion));

            return redirect("invitacion")->with([
                'flash_message' => 'Invitación enviada correctamente.',
                'flash_class'   => 'alert-success',
            ]);
        } else {
            return redirect("invitacion")->with([
                'flash_message'   => 'Ha ocurrido un error.',
                'flash_class'     => 'alert-danger',
                'flash_important' => true,
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
