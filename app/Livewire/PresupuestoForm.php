<?php

namespace App\Livewire;

use App\Mail\PresupuestoMail;
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

class PresupuestoForm extends Component implements HasForms, HasActions
{
  use InteractsWithActions;
  use InteractsWithForms;
  
  public $email;
  public $message;
  
  public function presupuestoAction(): Action
  {
    return Action::make('presupuesto')
        ->label(__('Solicitar Presupuesto'))
        ->modalHeading(__('¿Interesado en nuestros servicios? Rellene el siguiente formulario con una breve descripción de sus necesidades y le enviaremos un presupuesto personalizado lo antes posible.'))
        //->modalDescription(__('Si tiene alguna pregunta, no dude en contactarnos.'))
        ->modalSubmitActionLabel(__('Enviar'))
        ->button()
        ->extraAttributes(['class' => ' w-full sm:w-auto inline-flex items-center justify-center text-white bg-buttongruen border-0 px-6 focus:outline-none hover:bg-emerald-200 rounded-0 text-xl sm:text-lg mr-4 my-3 sm:my-0 py-5 sm:py-2', 'style' => 'font-weight: 400; border-radius: 0rem;'])
        ->form([
            TextInput::make('email')
                ->email()
                ->required()
                ->label(__('Tu correo electrónico')),
            Textarea::make('message')
                ->required()
                ->rows(5)
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
    Mail::to('mschenk.pda@gmail.com')->send(new PresupuestoMail($this->email, $this->message));
  }
  
  public function sendNotification(): void
  {
    Notification::make()
        ->title(__('Mensaje recibido'))
        ->icon('heroicon-o-paper-airplane')
        ->iconColor('success')
        //->success()
        ->body(__('Pronto nos pondremos en contacto contigo. Gracias por tu interés.'), 'green')
        ->send();
  }
  
  
}


