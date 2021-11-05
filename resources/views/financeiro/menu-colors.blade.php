@extends('layout')
@section('highlight') FINANCEIRO @endsection
@section('content')
<div class="col-md-8 text-center">
    <br><br>
    <div class="col-md-8 offset-md-2">
        <a href="{{url('/prorrogacao')}}" class="btn btn-lg btn-success btn-menu-revert-colors btn-square-md" style="font-weight: bold;">
            <br><img src="{{ url('/images/icon_prorro_bol.png') }}" style="max-width: 90px;"><br>
            Prorrogar Venc. <br>Boleto
        </a>
        <a href="{{url('/alteracao')}}" class="btn btn-lg btn-success btn-menu-revert-colors btn-square-md offset-md-1" style="font-weight: bold;">
            <br><img src="{{ url('/images/icon_alter_bol.png') }}" style="max-width: 90px;"><br>
            Alteração Venc. <br>Boleto
        </a>
    </div>
    <div class="col-md-8 offset-md-2 mt-md-5 mt-2">
        <a href="{{url('/prorrogacao')}}" class="btn btn-lg btn-success btn-menu-revert-colors btn-square-md" style="font-weight: bold;">
            <br><img src="{{ url('/images/icon_emiss_bol.png') }}" style="max-width: 90px;"><br>
            Emissão <br>Boleto
        </a>
        <a href="{{url('/pagamento')}}" class="btn btn-lg btn-success btn-menu-revert-colors btn-square-md offset-md-1" style="font-weight: bold;">
            <br><img src="{{ url('/images/icon_pag_bol.png') }}" style="max-width: 90px;"><br>
            Pagamento <br>Boleto
        </a>
    </div>
    <a href="{{url('/servicos')}}" class="btn btn-lg btn-success" style="position: absolute; right: 20px; bottom: 20px;"><i class="fa fa-arrow-left"></i></a>
</div>
@endsection
