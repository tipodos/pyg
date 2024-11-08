<?php

use App\Http\Controllers\categoriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\imagenController;
use App\Http\Controllers\inicioController;
use App\Http\Controllers\textoController;
use Illuminate\Support\Facades\Route;

Route::get('/',[inicioController::class,'index']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', [HomeController::class, 'index']);

    Route::get('/admin/categoria/',[categoriaController::class, 'index'])->name('categoria.index');
    Route::post('/admin/categoria/store',[categoriaController::class, 'store'])->name('categoria.store');
    Route::get('/admin/categoria/edit/{id}',[categoriaController::class, 'edit'])->name('categoria.edit');
    Route::put('/admin/categoria/update/{id}',[categoriaController::class, 'update'])->name('categoria.update');
    Route::delete('/admin/categoria/destroy/{id}',[categoriaController::class, 'destroy'])->name('categoria.destroy');

    Route::get('/admin/imagen/',[imagenController::class, 'index'])->name('imagen.index');
    Route::post('/admin/imagen/store',[imagenController::class, 'store'])->name('imagen.store');
    Route::get('/admin/imagen/edit/{id}',[imagenController::class, 'edit'])->name('imagen.edit');
    Route::put('/admin/imagen/update/{id}',[imagenController::class, 'update'])->name('imagen.update');
    Route::delete('/admin/imagen/destroy/{id}',[imagenController::class, 'destroy'])->name('imagen.destroy');

    Route::get('/admin/texto/',[textoController::class, 'index'])->name('texto.index');
    Route::post('/admin/texto/store',[textoController::class, 'store'])->name('texto.store');
    Route::get('/admin/texto/edit/{id}',[textoController::class, 'edit'])->name('texto.edit');
    Route::put('/admin/texto/update/{id}',[textoController::class, 'update'])->name('texto.update');
    Route::delete('/admin/texto/destroy/{id}',[textoController::class, 'destroy'])->name('texto.destroy');
}); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
