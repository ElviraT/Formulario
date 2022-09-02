<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Entrepreneur;

class ConfirmarRegistro extends Mailable
{
    use Queueable, SerializesModels;

    public $entrepreneur;

    public function __construct(Entrepreneur $entrepreneur)
    {
        $this->entrepreneur = $entrepreneur;
    }

    public function build()
    {
        return $this->view('mail.confirmar');
    }
}
