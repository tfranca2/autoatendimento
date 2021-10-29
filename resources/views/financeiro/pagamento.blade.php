@extends('layout')
@section('highlight')
FINANCEIRO
@endsection
@section('content')
<div class="col-md-8 text-center" style="position: relative; color: #49bf9c;">
<br>
<h3>Pagamento - Boletos</h3>
<table class="table">
    <thead style="color: #49bf9c;">
        <tr>
            <th>Vencimento</th>
            <th>Valor</th>
            <th>Dias de atraso</th>
            <th>Multa e Juros</th>
            <th>Valor Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ date('d/m/Y', strtotime('2021-09-16')) }}</td>
            <td>R$ {{ formatDecimalToView(3000.00) }}</td>
            <td>34</td>
            <td>R$ {{ formatDecimalToView(110.00) }}</td>
            <td>R$ {{ formatDecimalToView(3110.00) }}</td>
        </tr>
        <tr>
            <td>{{ date('d/m/Y', strtotime('2021-10-15')) }}</td>
            <td>R$ {{ formatDecimalToView(3000.00) }}</td>
            <td>5</td>
            <td>R$ {{ formatDecimalToView(10.00) }}</td>
            <td>R$ {{ formatDecimalToView(3010.00) }}</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th colspan="4" style="color: #49bf9c; text-align: right;">Valor Total - Boletos</th>
            <th>R$ {{ formatDecimalToView(6120.00) }}</th>
        </tr>
    </tfoot>
</table>
<div style="position: absolute; bottom: 20px; left: 20px;">
    <a href="{{url('/')}}" class="btn btn-lg btn-success">Cartão Crédito</a>
    <a href="{{url('/')}}" class="btn btn-lg btn-success">Cartão Debito</a>
</div>
<div style="position: absolute; bottom: 20px; right: 30px;">
    <a href="{{url('/financeiro')}}" class="btn btn-lg btn-success"><i class="fa fa-arrow-left"></i></a>
</div>
</div>
@endsection
