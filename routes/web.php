<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/chi-sono', function () {
    return view('chi-sono');
});

Route::get('/contatti', function () {
    return view('contatti');
});

Route::get('/lista-servizi', function () {
    $services = ["Ecommerce", "Gestionali", "Consulenza", "Formazione"];
    return view('lista-servizi', ['services' => $services]);
});
