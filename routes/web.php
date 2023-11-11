<?php

use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//seiten die lokalisiert werden sollen
//------------------------------------
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeCookieRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
  
  /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
  
  //OJO importante para Livewire componentes!!
  Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/livewire/update', $handle);
  });
  
  
  Route::get('/', function () {
    return view('home');
  });
  
  Route::get('/aviso-legal', function () {
    return view('aviso-legal');
  });
  
  Route::get('/politica-privacidad', function () {
    return view('politica-privacidad');
  });
  
  Route::get('/politica-cookies', function () {
    return view('politica-cookies');
  });
  
  
  Route::get('/test-notification', function () {
    Notification::make()
        ->title(__('Test Notification'))
        ->body(__('This is a test notification to confirm the notification system is working.'))
        ->success()
        ->send();
    
    return __('Notification sent!');
  });
  
  
  Route::get('test', function () {
    return View::make('test');
  });
  
});








