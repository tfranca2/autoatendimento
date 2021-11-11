@extends('layout')
@section('highlight')
FINANCEIRO
@endsection
@section('content')
<div class="col-md-8 gap-2 text-center" style="position: relative;">
    <div class="col-md-10 offset-md-1">
        <br> <h3 style="color: #49bf9c;">Qual o primeiro nome da sua mãe?</h3> <br>
        <div class="col-xs-8 mt-md-4 mt-2">
            <a href="#" class="btn btn-lg btn-success btn-square-sm text-center true" style="padding-top: 40px;">
            	{{ 'Aparecida' }}
        	</a>
            <a href="#" class="btn btn-lg btn-success btn-square-sm text-center offset-md-1 false" style="padding-top: 40px;">
            	{{ 'Francisca' }}
        	</a>
        </div>
        <div class="col-xs-8 mt-md-4 mt-2">
            <a href="#" class="btn btn-lg btn-success btn-square-sm text-center false" style="padding-top: 40px;">
            	{{ 'Lourdes' }}
        	</a>
            <a href="#" class="btn btn-lg btn-success btn-square-sm text-center offset-md-1 false" style="padding-top: 40px;">
            	{{ 'Glória' }}
        	</a>
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