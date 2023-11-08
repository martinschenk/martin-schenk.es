<?php

namespace App\Livewire;

use Filament\Notifications\Notification;
use Livewire\Component;

class TestNotification extends Component
{
  public function mount()
  {
    $this->notify();
  }
  
  public function notify()
  {
    Notification::make()
        ->success()
        ->title(__('Notification Title'))
        ->body(__('Notification Body'))
        ->send();
  }
  
  public function render()
  {
    return view('livewire.test-notification');
  }
}