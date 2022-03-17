@extends('layout')
@section('content')
<div class="col-md-8 text-center">
    <div class="col-md-6 offset-md-3">
        <br><br>
        <form action="{{ url('/') }}" method="GET" style="font-weight: bold; color: #47be9a;">
            @csrf
            <img src="{{ url('images/avatar.png') }}" style="max-width: 90px;"><br><br>
            <div class="row">
                <div class="col-md-2 pt-2">
                    <label class="pull-left">CPF</label>
                </div>
                <div class="col-md-10">
                    <input type="text" name="cpf" class="form-control" required="required" data-parsley-required="true" data-parsley-cpf="true" /><br>
                </div>
                <div class="col-md-2 pt-2">
                    <label class="pull-left">SENHA</label>
                </div>
                <div class="col-md-10">
                    <input type="password" name="senha" class="form-control" required="required" data-parsley-required="true" data-parsley-minlength="8" /><br>
                </div>
                <div class="col-md-5 offset-md-2 text-left pt-2">
                    <a href="{{ url('/password') }}" class="" style="color: #47be9a;">Esqueceu sua senha</a>
                </div>
                <div class="col-md-5">
                    <button type="submit" class="btn btn-lg btn-success pull-right">ENVIAR</button>
                </div>
            </div>
        </form>
    </div>
<!--     <div style="position: absolute; bottom: 20px; right: 30px;">
        <a href="#" onclick="window.history.back();" class="btn btn-lg btn-success"><i class="fa fa-arrow-left"></i></a>
    </div> -->
</div>
<style>
    body{
        background: #cff6ec;
    }
</style>
<!-- <script type="text/javascript">
    $(document).ready(function () {
        oneMinuteToReturnFor('');
    });
</script> -->
@endsection
