<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invitacion;
use App\Mail\InvitacionMail;
use Illuminate\Support\Facades\Auth;

class InvitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invitaciones = Invitacion::all();

        return view('invitacion.index',['invitaciones' => $invitaciones]);
    }

    public function create_invitacion($id,$codigo)
    {
        $invitacion= Invitacion::where('id',$id)->where('codigo',$codigo)->first();

        return view('invitacion.invitar ',['invitacion' => $invitacion,'correo'=>$invitacion->mail]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invitacion.create');
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
        $codigo=rand(11111, 99999).rand(11111, 99999).rand(11111, 99999);

        if ($request->invitar == 2) {
            $invitacion->email_invitacion = Auth::user()->email;
        }
        $invitacion->fill($request->all());
        $invitacion->codigo = $codigo;

        if ($invitacion->save()) {
            //dd($invitacion);
             \QrCode::size(900)
                ->format('png')
                ->generate($codigo, public_path('qr/'.$invitacion->codigo.'.png'));

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

    public function store_invitacion(Request $request)
    {
         //dump($request->all());

        $invitacion = new Invitacion;
        $codigo=rand(11111, 99999).rand(11111, 99999).rand(11111, 99999);

        if ($request->invitar == 2) {
            $invitacion->email_invitacion = $request->correo;
        }
        $invitacion->fill($request->all());
        $invitacion->codigo = $codigo;

        if ($invitacion->save()) {
            //dd($invitacion);
             \QrCode::size(500)
                ->format('png')
                ->generate($codigo, public_path('qr/'.$invitacion->codigo.'.png'));

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
        $invitacion = Invitacion::findOrfail($id);
        $qr       = \QrCode::format('png')->size(300)->generate($invitacion->codigo);
        $base64qr = base64_encode($qr);

        if ($invitacion->etiqueta == 1) {
            $etiqueta = 'Gratis';
        }

        if ($invitacion->etiqueta == 2) {
            $etiqueta = 'Por Pagar';
        }

        if ($invitacion->etiqueta == 3) {
            $etiqueta = 'Pagado';
        }

        return view('invitacion.view',['invitacion' => $invitacion,'qr' => $qr,'etiqueta' => $etiqueta]);
    }

    public function show_invitacion($id,$codigo)
    {
        $invitacion = Invitacion::where('id',$id)->where('codigo',$codigo)->first();

         if ($invitacion->etiqueta == 1) {
            $etiqueta = 'Gratis';
        }

        if ($invitacion->etiqueta == 2) {
            $etiqueta = 'Por Pagar';
        }

        if ($invitacion->etiqueta == 3) {
            $etiqueta = 'Pagado';
        }

        return view('invitacion.imprimir',['invitacion' => $invitacion,'etiqueta'=>$etiqueta]);
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
        $invitacion = Invitacion::findOrfail($id);

        $invitacion->etiqueta = 3;

         if ($invitacion->save()) {
        
            return redirect("invitacion")->with([
                'flash_message' => 'Invitación actualizada correctamente.',
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

    public function status(Request $request)
    {
        $invitacion = Invitacion::findOrfail($request->id);

        $invitacion->status = 1;

        if ($invitacion->save()) {
            return response()->json('si');
        }
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

    public function etiqueta($id)
    {

    }
}
