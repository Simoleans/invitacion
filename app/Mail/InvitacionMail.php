<?php

namespace App\Mail;

use App\Invitacion;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InvitacionMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $invitacion;
    
    public function __construct($invitacion)
    {
         $this->invitacion = $invitacion;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       return $this->view('mail.invitacion')
                    ->from('no-reply@actas.veanx.cl')
                    ->subject('¡Invitación!');
    }
}
