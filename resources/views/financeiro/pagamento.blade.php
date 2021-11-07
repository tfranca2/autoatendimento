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
<script type="text/javascript">
    var idleTime = 0;
    $(document).ready(function () {
        //Increment the idle time counter every minute.
        var idleInterval = setInterval(timerIncrement, 60000); // 1 minute

        $('html').mousemove(function (e) {
            idleTime = 0;
            clearInterval(idleInterval);
            idleInterval = setInterval(timerIncrement, 60000);
        });
        $('html').keypress(function (e) {
            idleTime = 0;
            clearInterval(idleInterval);
            idleInterval = setInterval(timerIncrement, 60000);
        });
    });

    function timerIncrement() {
        idleTime = idleTime + 1;
        if (idleTime > 0) { // minute
            window.location.href = 'financeiro';
        }
    }
</script>
@endsection
