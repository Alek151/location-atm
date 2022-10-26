@extends('layouts.app')

@section('Title', 'Editar')

@section('Content')

<h1>Edición de registros</h1>

<form action="{{ url('registro/'.$registro->id) }}" method="post">
@csrf
{{method_field('PUT')}}
 
@include('layouts.form') 
    
</form>
    
@endsection