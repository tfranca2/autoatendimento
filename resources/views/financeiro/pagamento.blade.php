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
    <a href="{{url('/')}}" class="btn btn-lg btn-success" style="min-width: 93px;"><img src="{{ url('/public/images/cartao_cred_br.png') }}" style="max-width: 30px;"> <br>Crédito</a>
    <a href="{{url('/')}}" class="btn btn-lg btn-success" style="min-width: 93px;"><img src="{{ url('/public/images/cartao_deb_br.png') }}" style="max-width: 30px;"> <br>Débito</a>
    <a href="{{url('/')}}" class="btn btn-lg btn-success disabled" style="min-width: 93px;"><img src="{{ url('/public/images/pix-br.png') }}" style="max-width: 30px;"> <br>PIX</a>
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
