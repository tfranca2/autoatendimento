@extends('layout')
@section('highlight') FINANCEIRO @endsection
@section('content')
<div class="col-md-8 gap-2 text-center" style="position: relative;">
    <div class="col-md-10 offset-md-1">
        <br>
        <h3 style="color: #49bf9c;">Alteração Vencimento - Boletos</h3>
        <div class="col-xs-8 mt-md-4 mt-2">
            <a href="#" class="btn btn-lg btn-success btn-square-sm opt" style="font-size: 70px;">05</a>
            <a href="#" class="btn btn-lg btn-success btn-square-sm offset-md-1 opt" style="font-size: 70px;">10</a>
            <a href="#" class="btn btn-lg btn-success btn-square-sm offset-md-1 opt" style="font-size: 70px;">15</a>
        </div>
        <div class="col-xs-8 mt-md-4 mt-2">
            <a href="#" class="btn btn-lg btn-success btn-square-sm disabled opt" disabled style="font-size: 70px;">20</a>
            <a href="#" class="btn btn-lg btn-success btn-square-sm offset-md-1 opt" style="font-size: 70px;">25</a>
            <!-- <a href="#" class="btn btn-lg btn-success btn-square-sm offset-md-1" style="font-size: 70px;">30</a> -->
        </div>
    </div>
    <div style="position: absolute; bottom: 20px; left: 20px;">
        <a href="{{url('/alterar')}}" class="btn btn-lg btn-success salvar">SALVAR</a>
    </div>
    <div style="position: absolute; bottom: 20px; right: 30px;">
        <a href="{{url('/financeiro')}}" class="btn btn-lg btn-success"><i class="fa fa-arrow-left"></i></a>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {

        oneMinuteToReturnFor('financeiro');

        $('.opt').click(function(){
            $('.selected').removeClass('selected');
            $(this).addClass('selected');
        });

        $('.salvar').click(function(e){
            e.preventDefault();
            if( $('.selected').length == 0 ){
                toastr.error('Selecione uma opção!');
            } else {
                window.location.href = 'alterar';
            }
        });

    });
</script>
@endsection
