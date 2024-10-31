<?php

use App\Http\Controllers\categoriaController;
use App\Http\Controllers\imagenController;
use App\Http\Controllers\textoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/categoria/',[categoriaController::class, 'index'])->name('categoria.index');
    Route::post('/admin/categoria/store',[categoriaController::class, 'store'])->name('categoria.store');
    Route::get('/admin/categoria/edit/{id}',[categoriaController::class, 'edit'])->name('categoria.edit');
    Route::put('/admin/categoria/update/{id}',[categoriaController::class, 'update'])->name('categoria.update');
    Route::delete('/admin/categoria/destroy/{id}',[categoriaController::class, 'destroy'])->name('categoria.destroy');
    Route::get('/admin/imagen/',[imagenController::class, 'index'])->name('imagen.index');
    Route::get('/admin/texto/',[textoController::class, 'index'])->name('texto.index');
}); 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
