@extends('layout')
@section('content')
<div class="col-md-8 h-75" style="display: flex; justify-content: center; align-items: center; text-align: center;">
    <div class="gap-4 col-md-8">
        <a href="{{url('/financeiro')}}" class="btn btn-success btn-square-md" style="font-size: 15pt; font-weight: bold;">
            <img src="{{ url('/images/icon_financeiro.png') }}" style="max-width: 140px;"><br>
            FINANCEIRO
        </a>
        <a href="{{url('/academico')}}" class="btn btn-success btn-square-md offset-md-1 disabled" style="font-size: 15pt; font-weight: bold;">
            <img src="{{ url('/images/icon_academico.png') }}" style="max-width: 140px;"><br>
            ACADÊMICO
        </a>
    </div>
</div>
@endsection
