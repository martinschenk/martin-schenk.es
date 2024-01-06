<?php

use App\Http\Controllers\CanvasUiController;
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
  
  //route slugs werden in der jeweiligen sprache angezeigt
  Route::get(LaravelLocalization::transRoute('routes.aviso-legal'), function () {
    return view('aviso-legal');
  });
  
  Route::get(LaravelLocalization::transRoute('routes.politica-privacidad'), function () {
    return view('politica-privacidad');
  });
  
  Route::get(LaravelLocalization::transRoute('routes.politica-cookies'), function () {
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


Route::prefix('canvas-ui')->group(function () {
  Route::prefix('api')->group(function () {
    Route::get('posts', [\App\Http\Controllers\CanvasUiController::class, 'getPosts']);
    Route::get('posts/{slug}', [\App\Http\Controllers\CanvasUiController::class, 'showPost'])
        ->middleware('Canvas\Http\Middleware\Session');
    
    Route::get('tags', [\App\Http\Controllers\CanvasUiController::class, 'getTags']);
    Route::get('tags/{slug}', [\App\Http\Controllers\CanvasUiController::class, 'showTag']);
    Route::get('tags/{slug}/posts', [\App\Http\Controllers\CanvasUiController::class, 'getPostsForTag']);
    
    Route::get('topics', [\App\Http\Controllers\CanvasUiController::class, 'getTopics']);
    Route::get('topics/{slug}', [\App\Http\Controllers\CanvasUiController::class, 'showTopic']);
    Route::get('topics/{slug}/posts', [\App\Http\Controllers\CanvasUiController::class, 'getPostsForTopic']);
    
    Route::get('users/{id}', [\App\Http\Controllers\CanvasUiController::class, 'showUser']);
    Route::get('users/{id}/posts', [\App\Http\Controllers\CanvasUiController::class, 'getPostsForUser']);
  });
  
  Route::get('/{view?}', [\App\Http\Controllers\CanvasUiController::class, 'index'])
      ->where('view', '(.*)')
      ->name('canvas-ui');
});
