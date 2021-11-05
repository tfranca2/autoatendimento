<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('login');
    // return view('menu');
    return view('menu-icons');
});

Route::get('/servicos', function () {
    // return view('menu');
    return view('menu-icons');
});

Route::get('/financeiro', function () {
    // return view('financeiro.menu');
    return view('financeiro.menu-colors');
});

Route::get('/prorrogacao', function () {
    return view('financeiro.prorrogacao');
});

Route::get('/pagamento', function () {
    return view('financeiro.pagamento');
});

Route::get('/alteracao', function () {
    return view('financeiro.alteracao');
});
