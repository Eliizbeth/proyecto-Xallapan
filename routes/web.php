<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ClienteprefController;
use App\Http\Controllers\ProfileController;


use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function(){
    Route::get('/',   'home')->name('home');
    Route::get('clientes',   'clientes')->name('clientes');
    Route::get('aquabonos', 'aquabonos')->name('aquabonos');
    Route::get('agregarcliente', 'agregarcliente')->name('agregarcliente');
    /*Route::get('precioCliente', 'precioCliente')->name('precioCliente');*/


});



Route::redirect('dashboard',('clientes'))->name('dashboard');

Route::resource('clientes', ClienteController::class)->except(['show'])->middleware(['auth']);
Route::resource('clientepref',ClienteprefController::class)->except(['show'])->middleware(['auth']);




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
