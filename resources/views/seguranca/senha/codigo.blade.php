@extends('layout')
@section('content')
<div class="col-md-8 text-center">
    <div class="col-md-6 offset-md-3">
        <br><br>
        <form action="{{ url('/nova_senha') }}" method="GET" style="font-weight: bold; color: #47be9a;">
            @csrf
            <div class="row">
                <div class="col-md-12 text-left">
                    <label for="">Um código foi enviado por SMS para (85) 9****-**66</label>
                </div>
                <div class="col-md-10 offset-md-2 text-left">
                    <label for="">Informe o código</label>
                    <input type="text" class="form-control" name="codigo" required>
                </div>
            </div><br>
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
    //     oneMinuteToReturnFor('');
    });
</script>
@endsection
