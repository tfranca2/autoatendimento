<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinanceiroController;

Route::get('/', function () {
    // return view('login');
    return view('menu');
});

Route::get('/servicos', function () {
    return view('menu');
});

Route::get('/financeiro', function () {
    return view('financeiro.menu');
});

Route::get('/prorrogacao', [FinanceiroController::class, 'prorrogacao']);
Route::get('/pagamento', [FinanceiroController::class, 'pagamento']);
Route::get('/alteracao', [FinanceiroController::class, 'alteracao']);
Route::get('/emissao', [FinanceiroController::class, 'emissao']);

Route::get('/prorrogar', function () {
    return view('financeiro.validacao.mes');
});

Route::get('/alterar', function () {
    return view('financeiro.validacao.mae');
});
