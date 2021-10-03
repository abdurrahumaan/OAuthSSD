<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('google')->name('google.')->group( function(){
    Route::get('login', [LoginController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [LoginController::class, 'callbackFromGoogle'])->name('callback');
});

Route::get('auth/facebook', [LoginController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [LoginController::class, 'loginWithFacebook']);
