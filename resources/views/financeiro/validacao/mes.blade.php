@extends('layout')
@section('highlight')
FINANCEIRO
@endsection
@section('content')
<div class="col-md-8 gap-2 text-center" style="position: relative;">
    <div class="col-md-10 offset-md-1">
        <br> <br> <h3 style="color: #49bf9c;">Qual o mês do seu aniversário?</h3> <br>
        <div class="col-md-8 offset-md-2 mt-md-4 mt-2">
            <a href="#" class="btn btn-lg btn-success btn-square-sm false" style="font-size: 75px; padding-top: 20px;">02</a>
            <a href="#" class="btn btn-lg btn-success btn-square-sm offset-md-1 true" style="font-size: 75px; padding-top: 20px;">07</a>
        </div>
        <div class="col-md-8 offset-md-2 mt-md-4 mt-2">
            <a href="#" class="btn btn-lg btn-success btn-square-sm false" style="font-size: 75px; padding-top: 20px;">09</a>
            <a href="#" class="btn btn-lg btn-success btn-square-sm offset-md-1 false" style="font-size: 75px; padding-top: 20px;">12</a>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
		$('.true').click(function(e){
			toastr.success('Alterado com sucesso!');
			window.location.href = 'financeiro';
		});
		$('.false').click(function(e){
			toastr.error('Opção inválida!');
			window.location.href = 'financeiro';
		});
	});
</script>
@endsection