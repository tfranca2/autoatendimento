@extends('layout')
@section('content')
<div class="col-md-8 text-center">
    <div class="col-md-6 offset-md-3">
        <br><br>
        <form action="{{ url('/login') }}" method="GET" style="font-weight: bold; color: #47be9a;">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <label for="">Confirme seus dados</label><br><br>
                </div>
            </div>
            <div class="row text-left">
                <div class="col-md-8">
                    <div class="col-md-12">
                        <label for="" class="pt-2 mb-auto">Informe a nova senha</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="col-md-12">
                        <label for="" class="pt-2 mb-auto">Repita a nova senha</label>
                        <input type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>
                <div class="col-md-4" style="font-size: 8pt; padding: 0; padding-top: 25px;">
                    <br>Mínimo 8 Caracteres<br>
                    Letras Maiusculas (A, B, C, ...)<br>
                    Letras Minúsculas (a, b, c, ...)<br>
                    Números (0, 1, 2, 3, ...)<br>
                    Especiais (!, @, #, ...)
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
