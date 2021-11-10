@extends('layout')
@section('highlight') FINANCEIRO @endsection
@section('content')
<div class="col-md-8 text-center">
    <br>
    <br>
    <div class="col-md-8 offset-md-2">
        <a href="{{url('/prorrogacao')}}" class="btn btn-lg btn-success btn-menu-revert-colors btn-square-md mt-md-1 mt-4">
            <br><i class="fa fa-calendar-plus-o" aria-hidden="true" style="font-size: 75px;"></i><br>
            Prorrogação <br>Vencimento
        </a>
        <a href="{{url('/alteracao')}}" class="btn btn-lg btn-success btn-menu-revert-colors btn-square-md offset-md-1 mt-md-1 mt-4">
            <br><i class="fa fa-calendar" aria-hidden="true" style="font-size: 75px;"></i><br>
            Alteração <br>Vencimento
        </a>
    </div>
    <div class="col-md-8 offset-md-2 mt-md-5 mb-4">
        <a href="{{url('/emissao')}}" class="btn btn-lg btn-success btn-menu-revert-colors btn-square-md mt-md-1 mt-4">
            <br><i class="fa fa-barcode" aria-hidden="true" style="font-size: 75px;"></i><br>
            Emissão
        </a>
        <a href="{{url('/pagamento')}}" class="btn btn-lg btn-success btn-menu-revert-colors btn-square-md offset-md-1 mt-md-1 mt-4">
            <br><i class="fa fa-usd" aria-hidden="true" style="font-size: 75px;"></i><br>
            Pagamento
        </a>
    </div>
    <br><br><br>
    <a href="{{url('/servicos')}}" class="btn btn-lg btn-success" style="position: absolute; right: 20px; bottom: 20px;"><i class="fa fa-arrow-left"></i></a>
</div>
@endsection
