@extends('layout')
@section('content')
<div class="col-md-8 h-75" style="display: flex; justify-content: center; align-items: center; text-align: center;">
    <div class="d-grid gap-4 col-md-8">
        <a href="{{url('/financeiro')}}" class="btn btn-lg btn-success">FINANCEIRO</a>
        <a href="{{url('/academico')}}" class="btn btn-lg btn-success">ACADÊMICO</a>
    </div>
</div>
@endsection
