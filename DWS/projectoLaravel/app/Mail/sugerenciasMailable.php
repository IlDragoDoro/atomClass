<?php
/*
*Este es el mailable que devolverá la vista sugerenciasMail
*para poder enviar un mail
*/
namespace App\Mail; //Donde está la ruta

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sugerenciasMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Hay una sugerencia nueva!!"; //Es el subject que tendrán todos los correos

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('sugerenciaMail'); //Devuelve la vista correspondiente
    }
}
