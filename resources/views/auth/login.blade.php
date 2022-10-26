@extends('layouts.app')
@section('Title', 'Login')
@section('Content')

<div class="container shadow-lg mt-5 p-4 justify-content-center">
    <h1 class="text-center m-4">Inicio de sesión</h1>
    <form action="" method="post">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
          <input type="email" class="form-control" name="email" id="email">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" name="password" class="form-control" id="password">
        </div>
         
       @error('message')
         <div class="alert alert-danger" role="alert">  
          {{ $message }}  
          </div>
       @enderror
 
       <div class="justify-content-center container">
        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
       </div>
        

      </form>

</div>

@endsection