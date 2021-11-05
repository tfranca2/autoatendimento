@extends('layout')
@section('highlight') FINANCEIRO @endsection
@section('content')
<div class="col-md-8 gap-2 text-center" style="position: relative;">
    <div class="col-md-10 offset-md-1">
        <br>
        <h3 style="color: #49bf9c;">Alteração Vencimento - Boletos</h3>
        <div class="col-md-8 offset-md-2 mt-md-4 mt-2">
            <a href="#" class="btn btn-lg btn-success btn-square-sm" style="font-size: 75px; padding-top: 20px;">05</a>
            <a href="#" class="btn btn-lg btn-success btn-square-sm offset-md-1" style="font-size: 75px; padding-top: 20px;">10</a>
        </div>
        <div class="col-md-8 offset-md-2 mt-md-4 mt-2">
            <a href="#" class="btn btn-lg btn-success btn-square-sm" style="font-size: 75px; padding-top: 20px;">15</a>
            <a href="#" class="btn btn-lg btn-success btn-square-sm offset-md-1" style="font-size: 75px; padding-top: 20px;">20</a>
        </div>
        <div class="col-md-8 offset-md-2 mt-md-4 mt-2">
            <a href="#" class="btn btn-lg btn-success btn-square-sm" style="font-size: 75px; padding-top: 20px;">25</a>
            <!-- <a href="#" class="btn btn-lg btn-success btn-square-sm offset-md-1" style="font-size: 75px; padding-top: 20px;">30</a> -->
        </div>
    </div>
    <div style="position: absolute; bottom: 20px; left: 20px;">
        <a href="{{url('/')}}" class="btn btn-lg btn-success">SALVAR</a>
    </div>
    <div style="position: absolute; bottom: 20px; right: 30px;">
        <a href="{{url('/financeiro')}}" class="btn btn-lg btn-success"><i class="fa fa-arrow-left"></i></a>
    </div>
</div>
@endsection
