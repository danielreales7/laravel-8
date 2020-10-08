<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\App;
use \Illuminate\Support\Facades\DB;

App::setLocale('es');

//DB::listen(function($query) {
//    var_dump($query->sql);
//}); Con esto vemos las consultas que se hacen a la base de datos

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');

Route::resource('portafolio', ProjectController::class)
    ->names('projects')
    ->parameters(['portafolio' => 'project']);

Route::patch('portafolio/{project}/restore', [ProjectController::class, 'restore'])->name('projects.restore');
Route::delete('portafolio/{project}/forceDelete', [ProjectController::class, 'forceDelete'])->name('projects.forceDelete');

Route::get('categorias/{category}', [CategoryController::class, 'show'])->name('categories.show');

//Route::get('/portafolio', [ProjectController::class, 'index'])->name('projects.index');
//Route::get('/portafolio/crear', [ProjectController::class, 'create'])->name('projects.create');
//
//Route::get('/portafolio/{project}/editar', [ProjectController::class, 'edit'])->name('projects.edit');
//Route::patch('/portafolio/{project}', [ProjectController::class, 'update'])->name('projects.update');
//
//Route::post('/portafolio', [ProjectController::class, 'store'])->name('projects.store');
//Route::get('/portfaolio/{project}', [ProjectController::class, 'show'])->name('projects.show');
//
//Route::delete('/portfaolio/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');

Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', [MessageController::class, 'store'])->name('messages.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
