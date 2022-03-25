@extends('layout')
@section('content')
<div class="col-md-8 text-center">
    <div class="col-md-6 offset-md-3">
        <br><br>
        <form action="{{ url('/opcao') }}" method="GET" style="font-weight: bold; color: #47be9a;">
            @csrf
            <img src="{{ url('images/avatar.png') }}" style="max-width: 90px;"><br><br>
            <div class="row">
                <div class="col-md-6">
                    <label for="cpf">
                        <input id="cpf" type="radio" name="tipo" value="cpf" checked> CPF
                    </label>
                </div>
                <div class="col-md-6">
                    <label for="matricula">
                        <input id="matricula" type="radio" name="tipo" value="matricula"> Matricula
                    </label>
                </div>
            </div>
            <input type="text" id="campo" name="campo" class="form-control cpf" required="required" data-parsley-required="true" /><br>
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

        $('input[name=tipo]').change(function(){
            if($(this).val() == 'cpf'){
                $('#campo').val('');
                $('#campo').removeClass('matricula');
                $('#campo').addClass('cpf');
                $('#campo').data('parsley-cpf', 'true');
            } else {
                $('#campo').val('');
                $('#campo').removeClass('cpf');
                $('#campo').addClass('matricula');
                $('#campo').removeProp('data-parsley-cpf');
            }
        });
        $('body').on('focus', '.matricula', function(){ $(this).unmask() });
    });
</script>
@endsection
