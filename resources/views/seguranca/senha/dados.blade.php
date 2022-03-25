@extends('layout')
@section('content')
<div class="col-md-8 text-center">
    <div class="col-md-6 offset-md-3">
        <br><br>
        <form action="{{ url('/nova_senha') }}" method="GET" style="font-weight: bold; color: #47be9a;">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <label for="">Confirme seus dados</label><br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-left"><label for="" class="pt-2 mb-auto">Telefone</label></div>
                <div class="col-md-8"><input type="telefone" class="form-control" name="telefone" required></div>
            </div>
            <div class="row">
                <div class="col-md-4 text-left"><label for="" class="pt-2 mb-auto">E-mail</label></div>
                <div class="col-md-8"><input type="email" class="form-control" name="email" required></div>
            </div>
            <div class="row">
                <div class="col-md-4 text-left"><label for="" class="pt-2 mb-auto">Data de Nasc.</label></div>
                <div class="col-md-8"><input type="date" class="form-control" name="nascimento" required></div>
            </div>
            <div class="row">
                <div class="col-md-4 text-left"><label for="" class="pt-2 mb-auto">Randômico</label></div>
                <div class="col-md-8"><input type="text" class="form-control" name="randomico" required></div>
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
