<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinanceiroController;

Route::get('/', function(){ return view('login'); });

Route::get('/login', function(){ return view('login'); });
Route::get('/password', function(){ return view('password'); });

Route::get('/opcao', function(){ return view('seguranca.senha.opcao'); });
Route::get('/codigo', function(){ return view('seguranca.senha.codigo'); });
Route::get('/confirmar', function(){ return view('seguranca.senha.dados'); });
Route::get('/nova_senha', function(){ return view('seguranca.senha.nova_senha'); });

Route::get('/servicos', function(){ return view('menu'); });

Route::get('/prorrogacao', [FinanceiroController::class, 'prorrogacao']);
Route::get('/pagamento', [FinanceiroController::class, 'pagamento']);
Route::get('/alteracao', [FinanceiroController::class, 'alteracao']);
Route::get('/emissao', [FinanceiroController::class, 'emissao']);

Route::get('/financeiro', function(){ return view('financeiro.menu'); });
Route::get('/prorrogar', function(){ return view('financeiro.validacao.mes'); });
Route::get('/alterar', function(){ return view('financeiro.validacao.mae'); });
