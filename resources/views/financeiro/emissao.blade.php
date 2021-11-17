@extends('layout')
@section('highlight')
FINANCEIRO
@endsection
@section('content')
<div class="col-md-8 text-center" style="position: relative; color: #49bf9c;">
<br>
<h3>Emissão - Boletos</h3>
<table class="table" style="line-height: 3;">
    <thead style="color: #49bf9c;">
        <tr>
            <th>Boleto</th>
            <th>Vencimento</th>
            <th>Valor</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><label for="boleto1"><input type="radio" name="boleto" id="boleto1"></label></td>
            <td><label for="boleto1">{{ date('d/m/Y', strtotime('2021-09-16')) }}</label></td>
            <td><label for="boleto1">R$ {{ formatDecimalToView(3000.00) }}</label></td>
        </tr>
        <tr>
            <td><label for="boleto2"><input type="radio" name="boleto" id="boleto2"></label></td>
            <td><label for="boleto2">{{ date('d/m/Y', strtotime('2021-10-15')) }}</label></td>
            <td><label for="boleto2">R$ {{ formatDecimalToView(3000.00) }}</label></td>
        </tr>
    </tbody>
</table>
<div style="position: absolute; bottom: 20px; left: 20px;">
    <a href="{{url('/')}}" class="btn btn-lg btn-success" style="min-width: 93px;"><img src="{{ url('/public/images/boleto_emissao_br.png') }}" style="max-width: 30px;"> <br>Emitir</a>
</div>
<div style="position: absolute; bottom: 20px; right: 30px;">
    <a href="{{url('/financeiro')}}" class="btn btn-lg btn-success"><i class="fa fa-arrow-left"></i></a>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        oneMinuteToReturnFor('financeiro');
    });
</script>
@endsection
