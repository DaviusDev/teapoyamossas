<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Vacante;

class VacanteRecibidaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $datos;
    public $estado;


    public function __construct(Vacante $datos, $estado)
    {
        $this->datos = $datos;
        $this->estado = $estado;
    }



    public function build()
    {
        if ($this->estado == 'nuevo') {
            $this->subject('Solicitud de vacante recibida')
                  -> view('emails.vacante_recibida');
        } elseif ($this->estado == 'rechazado') {
            $this->subject('Solicitud de vacante rechazada')
                    -> view('emails.rechazo');
        } elseif ($this->estado == 'aceptado') {
            $this->subject('Solicitud de vacante aceptada')
                    -> view('emails.avance');
        }
         
    }

}
