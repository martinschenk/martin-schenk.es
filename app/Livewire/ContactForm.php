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
        ->button()
        ->label(__('Contáctanos'))
        ->extraAttributes(['class' => ' inline-flex text-white bg-mittelgruen border-0 py-2 px-6 focus:outline-none hover:bg-teal-600 rounded-sm  text-sm sm:text-lg', 'style' => 'font-weight: 400; border-radius: 0.3rem;'])
        ->form([
            TextInput::make('email')
                ->email()
                ->required()
                ->label(__('Email Address')),
            Textarea::make('message')
                ->required()
                ->label(__('Message')),
        ])
        ->requiresConfirmation()
        ->action(function (array $data): void {
          //dd($data);
          $this->email = $data['email'];
          $this->message = $data['message'];
          $this->sendEmail();
          $this->sendNotification();
        });
  }
  
  public function sendEmail()
  {
    Mail::to('mschenk.pda@gmail.com')->send(new ContactMail($this->email, $this->message));
  }
  
  public function sendNotification(): void
  {
    Notification::make()
        ->title(__('Mensaje enviado a :email', ['email' => $this->email]))
        ->icon('heroicon-o-paper-airplane')
        ->success()
        ->iconColor('success')
        ->body(__('Pronto nos pondremos en contacto con usted. Gracias por su interés.'), 'green')
        ->send();
  }
  
  
}


