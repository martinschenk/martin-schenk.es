<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PresupuestoMail extends Mailable
{
  use Queueable, SerializesModels;
  
  public string $email;
  public string $message;
  
  public function __construct($email, $message)
  {
    $this->email = $email;
    $this->message = $message;
  }
  
  public function build(): PresupuestoMail
  {
    //dd($this->message);
    return $this->view('emails.presupuesto')
        ->subject(__('web ms formulario PRESUPUESTO de :email', ['email' => $this->email]))
        ->with([
            'email' => $this->email,
            'mailBody' => $this->message,
        ]);
  }
}
