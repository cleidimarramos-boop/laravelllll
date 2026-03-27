<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/cardapio', function () {
    return view('cardapio');
});

Route::get('/promocao', function () {
    return view('promocao');
});

Route::get('/pagina1', function () {
    return view('pagina1');
});

Route::get('/tela', function () {
    return view('tela');
});
