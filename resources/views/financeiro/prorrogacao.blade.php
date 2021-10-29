@extends('layout')
@section('highlight')
FINANCEIRO
@endsection
@section('content')
<div class="col-md-8 text-center" style="position: relative; color: #49bf9c;">
<br>
<h3>Prorrogação Vencimento - Boletos</h3>
<table class="table">
    <thead style="color: #49bf9c;">
        <tr>
            <th>Boleto</th>
            <th>Vencimento Atual</th>
            <th>Valor Atualizado</th>
            <th>Obs.</th>
            <th>Nova Data</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="checkbox" checked></td>
            <td>{{ date('d/m/Y', strtotime('2021-09-16')) }}</td>
            <td>R$ {{ formatDecimalToView(3110.00) }}</td>
            <td><span class="text-danger">Não Permitido. Excedeu 15 dias</span></td>
            <td></td>
        </tr>
        <tr>
            <td><input type="checkbox" checked></td>
            <td>{{ date('d/m/Y', strtotime('2021-10-15')) }}</td>
            <td>R$ {{ formatDecimalToView(3010.00) }}</td>
            <td>Limite: 15 dias após o vencimen.</td>
            <td><i class="fa fa-calendar-check-o" aria-hidden="true"></i></td>
        </tr>
        <tr>
            <td><input type="checkbox"></td>
            <td>{{ date('d/m/Y', strtotime('2021-11-20')) }}</td>
            <td>R$ {{ formatDecimalToView(3010.00) }}</td>
            <td>Limite: 15 dias após o vencimen.</td>
            <td><i class="fa fa-calendar" aria-hidden="true"></i></td>
        </tr>
    </tbody>
</table>
<div style="position: absolute; bottom: 20px; left: 20px;">
    <a href="{{url('/pagamento')}}" class="btn btn-lg btn-success">PAGAR</a>
    <a href="{{url('/')}}" class="btn btn-lg btn-success">SALVAR</a>
</div>
<div style="position: absolute; bottom: 20px; right: 30px;">
    <a href="{{url('/financeiro')}}" class="btn btn-lg btn-success"><i class="fa fa-arrow-left"></i></a>
</div>
</div>
@endsection
