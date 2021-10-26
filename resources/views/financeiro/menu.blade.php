@extends('layout')
@section('highlight') FINANCEIRO @endsection
@section('content')
<div class="col-md-8 h-75" style="display: flex; justify-content: center; align-items: center; text-align: center;">
    <div class="d-grid gap-4 col-md-8">
        <a href="{{url('/prorrogacao')}}" class="btn btn-lg btn-success btn-menu-revert-colors">Prorrogação Vencimento - Boletos</a>
        <a href="{{url('/alteracao')}}" class="btn btn-lg btn-success btn-menu-revert-colors">Alteração Vencimento - Boletos</a>
        <a href="{{url('/pagamento')}}" class="btn btn-lg btn-success btn-menu-revert-colors">Pagamento - Boletos</a>
    </div>
    <a href="{{url('/servicos')}}" class="btn btn-lg btn-success" style="position: absolute; right: 20px; bottom: 20px;"><i class="fa fa-arrow-left"></i></a>
</div>
@endsection
