<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('homepage');

Route::get('/chi-sono', [PageController::class, 'chisono'])->name('about');

Route::get('/contatti', [PageController::class, 'contact'])->name('contact');

Route::get('/lista-servizi', [PageController::class, 'servizi'])->name('servizi');

Route::get('/prodotti/{servizio}', [PageController::class, 'show']);