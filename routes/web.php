<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/showLogin', [App\Http\Controllers\LinguaController::class, "showLogin"])->name('showLogin');
Route::post('/validateLogin', [App\Http\Controllers\LinguaController::class, "validateLogin"])->name('validateLogin');

Route::get('/showRegister', [App\Http\Controllers\LinguaController::class, "showRegister"])->name('showRegister');
Route::post('/validateRegister', [App\Http\Controllers\LinguaController::class, "validateRegister"])->name('validateRegister');

Route::get('/menu', [App\Http\Controllers\LinguaController::class, "menu"])->name('menu');

Route::get('/veurePersones', [App\Http\Controllers\LinguaController::class, "veurePersones"])->name('veurePersones');
Route::get('/eliminarUsuari', [App\Http\Controllers\LinguaController::class, "eliminarUsuari"])->name('eliminarUsuari');
Route::get('/destroySession', [App\Http\Controllers\LinguaController::class, "destroySession"])->name('destroySession');

