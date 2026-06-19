<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('homepage');
    }
    public function contact(){
        return view('contatti');
    }
    public function chisono(){
        return view('chi-sono');
    }
    public function servizi(){
        $services = ["Ecommerce", "Gestionali", "Consulenza", "Formazione"];
        return view('lista-servizi', ['servizi' => $services]);
    }
    public function show($servizio){
        $services = ['ecommerce'  => 'Ecommerce','gestionali' => 'Gestionali','consulenza' => 'Consulenza','formazione' => 'Formazione',];
        if (array_key_exists($servizio, $services)) {
            return view('prodotti', ['servizio' => $services[$servizio]]);
        } else {
            abort(404);
        }
    }
}
