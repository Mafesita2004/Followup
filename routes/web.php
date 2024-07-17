<?php

use App\Http\Controllers\ApprenticeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/homeaprendiz', [ApprenticeController::class, 'index'])->name('apprentice.index');
Route::post('/homeaprendiiz', [ApprenticeController::class, 'homeaprendizStore'])->name('homeaprendiz.store');   
