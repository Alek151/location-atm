@extends('layouts.app')
@section('Title', 'Crear')
@section('Content')
<a class="btn btn-warning mx-5 rounded mt-1" href="{{ url('registro') }}">Regresar</a>
<h1 class="mx-4 my-2 bg-dark rounded p-2 text-light">Creación de registros</h1>
<hr>
<form action="{{ url('registro') }}" method="post">
@csrf
@include('layouts.form')    
</form>

@endsection