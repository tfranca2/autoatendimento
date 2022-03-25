@extends('layout')
@section('content')
<div class="col-md-8 text-center">
    <div class="col-md-6 offset-md-3">
        <br><br>
        <form action="{{ url('/codigo') }}" method="GET" style="font-weight: bold; color: #47be9a;">
            @csrf
            <div class="row">
                <div class="col-md-12 text-left">
                    <label for="">Como gostaria de redefinir sua senha</label>
                </div>
                <div class="col-md-10 offset-md-2 text-left">
                    <label for="sms"><input type="radio" required name="opcao" id="sms" value="sms"> SMS para (85) 9****-**66</label><br>
                    <label for="email"><input type="radio" required name="opcao" id="email" value="email"> Enviar e-mail para fun****@gmail.com</label><br>
                    <label for="dados"><input type="radio" required name="opcao" id="dados" value="dados"> Confirmar dados pessoais</label><br>
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
        $('input[name=opcao]').change(function(){
            if( $(this).val() == 'dados' ){
                $('form').attr('action', "{{url('/confirmar')}}");
            } else {
                $('form').attr('action', "{{url('/codigo')}}");
            }
        });
    });
</script>
@endsection
