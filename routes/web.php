<?php

use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Route;

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

Route::get('/test-notification', function () {
  Notification::make()
      ->title('Test Notification')
      ->body('This is a test notification to confirm the notification system is working.')
      ->success()
      ->send();
  
  return 'Notification sent!';
});


Route::get('/', function () {
    return view('home');
});

//Route::get('/', function () {
//    return redirect('/aviso-legal');
//});


Route::get('/aviso-legal', function () {
    return view('aviso-legal');
});

Route::get('/politica-privacidad', function () {
    return view('politica-privacidad');
});

Route::get('/politica-cookies', function () {
    return view('politica-cookies');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');
//
//require __DIR__.'/auth.php';
