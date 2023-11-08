<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
  use Queueable, SerializesModels;
  
  public string $email;
  public string $message;
  
  public function __construct($email, $message)
  {
    $this->email = $email;
    $this->message = $message;
  }
  
  public function build(): ContactMail
  {
    //dd($this->message);
    return $this->view('emails.contact')
        ->subject(__('web ms formulario contacto de :email', ['email' => $this->email]))
        ->with([
            'email' => $this->email,
            'mailBody' => $this->message,
        ]);
  }
}
