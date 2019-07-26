<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitacion extends Model
{
	public $table= 'invitaciones';

     protected $fillable = [
        'nombre', 'email', 'telefono','rut','invitar','empresa','user_id','codigo'
    ];

    public function base64($dato){
        $qr = \QrCode::format('png')->size(300)->generate(trim($dato));
        return base64_encode($qr);
    }
}
