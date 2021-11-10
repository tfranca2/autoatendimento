<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class FinanceiroController extends Controller
{
    public function prorrogacao( Request $request )
    {
        if( ! $request->has('cpf') || ! isCpf($request->cpf) )
            return view('login',[ 'redirect' => 'prorrogacao' ]);

        return view('financeiro.prorrogacao',[ 'cpf' => $request->cpf, ]);
    }

    public function pagamento( Request $request )
    {
        if( ! $request->has('cpf') || ! isCpf($request->cpf) )
            return view('login',[ 'redirect' => 'pagamento' ]);

        return view('financeiro.pagamento',[ 'cpf' => $request->cpf, ]);
    }

    public function alteracao( Request $request )
    {
        if( ! $request->has('cpf') || ! isCpf($request->cpf) )
            return view('login',[ 'redirect' => 'alteracao' ]);

        return view('financeiro.alteracao',[ 'cpf' => $request->cpf, ]);
    }

    public function emissao( Request $request )
    {
        if( ! $request->has('cpf') || ! isCpf($request->cpf) )
            return view('login',[ 'redirect' => 'emissao' ]);

        return view('financeiro.emissao',[ 'cpf' => $request->cpf, ]);
    }
}
