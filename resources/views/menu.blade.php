@extends('layout')
@section('content')
<div class="col-md-8 h-75" style="display: flex; justify-content: center; align-items: center; text-align: center;">
    <div class="gap-4 col-md-8">
        <a href="{{url('/financeiro')}}" class="btn btn-success btn-square-md mt-4">
            <br><br><i class="fa fa-university" aria-hidden="true" style="font-size: 75px;"></i><br>
            FINANCEIRO
        </a>
        <a href="{{url('/academico')}}" class="btn btn-success btn-square-md disabled offset-md-1 mt-4">
            <br><br><i class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 75px;"></i><br>
            ACADÊMICO
        </a>
    </div>
</div>
@endsection
