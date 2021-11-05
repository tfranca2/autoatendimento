@extends('layout')
@section('highlight') FINANCEIRO @endsection
@section('content')
<div class="col-md-8 text-center">
    <br><h2 style="">Boletos</h2>
    <div class="col-md-8 offset-md-2">
        <a href="{{url('/prorrogacao')}}" class="btn btn-lg btn-success btn-menu-revert-colors btn-square-md">
            <br><i class="fa fa-repeat" aria-hidden="true" style="font-size: 75px;"></i><br>
            Prorrogação Vencimento
        </a>
        <a href="{{url('/alteracao')}}" class="btn btn-lg btn-success btn-menu-revert-colors btn-square-md offset-md-1">
            <br><i class="fa fa-calendar" aria-hidden="true" style="font-size: 75px;"></i><br>
            Alteração Vencimento
        </a>
    </div>
    <div class="col-md-8 offset-md-2 mt-md-5 mt-2">
        <a href="{{url('/prorrogacao')}}" class="btn btn-lg btn-success btn-menu-revert-colors btn-square-md">
            <br><i class="fa fa-barcode" aria-hidden="true" style="font-size: 75px;"></i><br>
            Emissão
        </a>
        <a href="{{url('/pagamento')}}" class="btn btn-lg btn-success btn-menu-revert-colors btn-square-md offset-md-1">
            <br><i class="fa fa-money" aria-hidden="true" style="font-size: 75px;"></i><br>
            Pagamento
        </a>
    </div>
    <a href="{{url('/servicos')}}" class="btn btn-lg btn-success" style="position: absolute; right: 20px; bottom: 20px;"><i class="fa fa-arrow-left"></i></a>
</div>
@endsection
