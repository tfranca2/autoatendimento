@extends('layout')
@section('content')
<div class="col-md-8 text-center">
    <div class="col-md-6 offset-md-3">
        <br><br>
        <form action="{{ url('/'.$redirect) }}" method="GET" style="font-weight: bold; color: #47be9a;">
            @csrf
            <img src="{{ url('images/avatar.png') }}" style="max-width: 90px;"><br>
            <label class="pull-left">CPF</label>
            <input type="text" name="cpf" class="form-control" required="required" data-parsley-required="true" data-parsley-cpf="true" /><br>
            <button type="submit" class="btn btn-lg btn-success pull-right">ENVIAR</button>
        </form>
    </div>
    <div style="position: absolute; bottom: 20px; right: 30px;">
        <a href="#" onclick="window.history.back();" class="btn btn-lg btn-success"><i class="fa fa-arrow-left"></i></a>
    </div>
</div>
<style>
    body{
        background: #cff6ec;
    }
</style>
<script type="text/javascript">
    $(document).ready(function () {
        oneMinuteToReturnFor('');
    });
</script>
@endsection
