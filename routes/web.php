<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('menu');
});

Route::get('/financeiro', function () {
    return view('financeiro.menu');
});

Route::get('/prorrogacao', function () {
    return view('financeiro.prorrogacao');
});

Route::get('/pagamento', function () {
    return view('financeiro.pagamento');
});
