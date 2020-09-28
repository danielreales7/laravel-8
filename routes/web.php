<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\MessagesController;
use Illuminate\Support\Facades\App;

App::setLocale('es');

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [MessagesController::class, 'store']);
