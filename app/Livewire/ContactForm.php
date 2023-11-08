<?php

namespace App\Livewire;

use App\Mail\ContactMail;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component implements HasForms, HasActions
{
  use InteractsWithActions;
  use InteractsWithForms;
  
  public $email;
  public $message;
  
  public function contactAction(): Action
  {
    return Action::make('contact')
        ->label(__('Contáctanos'))
        ->modalHeading(__('Tus preguntas son bienvenidas'))
        //->modalDescription(__('Si tiene alguna pregunta, no dude en contactarnos.'))
        ->modalSubmitActionLabel(__('Enviar'))
        ->button()
        ->extraAttributes(['class' => ' inline-flex text-white bg-buttongruen border-0 py-2 px-6 focus:outline-none hover:bg-emerald-200 rounded-sm  text-sm sm:text-lg', 'style' => 'font-weight: 400; border-radius: 0.3rem; xbackground-color: #24CD9C;'])
        ->form([
            TextInput::make('email')
                ->email()
                ->required()
                ->label(__('Tu correo electrónico')),
            Textarea::make('message')
                ->required()
                ->label(__('Tu Mensaje')),
        ])
        
        //->requiresConfirmation()
        ->action(function (array $data): void {
          //dd($data);
          $this->email = $data['email'];
          $this->message = $data['message'];
          $this->sendEmail();
          $this->sendNotification();
        });
  }
  
  public function sendEmail(): void
  {
    Mail::to('mschenk.pda@gmail.com')->send(new ContactMail($this->email, $this->message));
  }
  
  public function sendNotification(): void
  {
    Notification::make()
        ->title(__('El mensaje ha sido enviado.'))
        ->icon('heroicon-o-paper-airplane')
        ->iconColor('success')
        //->success()
        ->body(__('Pronto nos pondremos en contacto contigo. Gracias por tu interés.'), 'green')
        ->send();
  }
  
  
}


