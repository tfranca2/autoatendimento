@extends('layout')
@section('highlight') FINANCEIRO @endsection
@section('content')
<div class="col-md-8 gap-2 text-center" style="position: relative;">
    <div class="d-grid gap-4 col-md-8 offset-md-2">
        <br>
        <h3 style="color: #49bf9c;">Alteração Vencimento - Boletos</h3>
        <div class="col-md-8 offset-md-2" style="background: #cff6ec;">
            <fieldset class="col-10 offset-1" style="margin-top: 20px;">
                <input type="date" name="date" class="form-control text-center">
                <i class="fa fa-calendar" aria-hidden="true" style="float: right; margin-top: -27px; margin-right: 10px;"></i>
                <p><br><b>*Obs.: A alteração será aplicada a partir do mês subsequente ao mês corrente.</b></p>
            </fieldset>
        </div>
    </div>
    <div style="position: absolute; bottom: 20px; left: 20px;">
        <a href="{{url('/')}}" class="btn btn-lg btn-success">SALVAR</a>
    </div>
    <div style="position: absolute; bottom: 20px; right: 30px;">
        <a href="{{url('/financeiro')}}" class="btn btn-lg btn-success"><i class="fa fa-arrow-left"></i></a>
    </div>
</div>
@endsection
