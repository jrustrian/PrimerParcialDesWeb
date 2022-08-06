<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('Cliente')->group(function () {
    Route::get('/agregar', [CustomerController::class, 'create'])->name('customer-add');
    Route::get('/visualizar', [CustomerController::class, 'index'])->name('customer-visualize');
    Route::post('/crear', [CustomerController::class, 'store'])->name('customer-create');
    //Route::delete('/eliminar/{id}', [CustomerController::class, 'delete'])->name('customer-delete');
    //Route::get('/editar/{id}', [CustomerController::class, 'edit'])->name('customer-edit');
    //Route::PUT('/actualizar/{id}', [CustomerController::class, 'update'])->name('customer-update');
});
