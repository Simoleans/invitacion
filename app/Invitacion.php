<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitacion extends Model
{
	public $table= 'invitaciones';

     protected $fillable = [
        'nombre', 'email', 'telefono','rut','invitar','empresa','user_id'
    ];
}
