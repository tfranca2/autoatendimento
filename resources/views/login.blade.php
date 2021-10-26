@extends('layout')
@section('content')
<div class="col-md-8 h-75" style="display: flex; justify-content: center; align-items: center; text-align: center;">
    <div class="d-grid gap-4 col-md-6">
        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <input type="text" name="cpf" placeholder="CPF" class="form-control" required="required" data-parsley-required="true" data-parsley-cpf="true" /><br>
            <button type="submit" class="btn btn-lg btn-success">ACESSAR</button>
        </form>
    </div>
</div>
@endsection
