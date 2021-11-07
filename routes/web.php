<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinanceiroController;

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

Route::get('/prorrogacao', [FinanceiroController::class, 'prorrogacao']);
Route::get('/pagamento', [FinanceiroController::class, 'pagamento']);
Route::get('/alteracao', [FinanceiroController::class, 'alteracao']);
