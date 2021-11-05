@extends('layout')
@section('highlight')
FINANCEIRO
@endsection
@section('content')
<div class="col-md-8 text-center" style="position: relative; color: #49bf9c;">
<br>
<h3>Pagamento - Boletos</h3>
<table class="table" style="line-height: 3;">
    <thead style="color: #49bf9c;">
        <tr>
            <th>Vencimento</th>
            <th>Valor</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ date('d/m/Y', strtotime('2021-09-16')) }}</td>
            <td>R$ {{ formatDecimalToView(3000.00) }}</td>
        </tr>
        <tr>
            <td>{{ date('d/m/Y', strtotime('2021-10-15')) }}</td>
            <td>R$ {{ formatDecimalToView(3000.00) }}</td>
        </tr>
    </tbody>
</table>
<div style="position: absolute; bottom: 20px; left: 20px;">
    <a href="{{url('/')}}" class="btn btn-lg btn-success">Crédito</a>
    <a href="{{url('/')}}" class="btn btn-lg btn-success">Débito</a>
    <a href="{{url('/')}}" class="btn btn-lg btn-success disabled">PIX</a>
</div>
<div style="position: absolute; bottom: 20px; right: 30px;">
    <a href="{{url('/financeiro')}}" class="btn btn-lg btn-success"><i class="fa fa-arrow-left"></i></a>
</div>
</div>
@endsection
