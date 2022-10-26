@extends('layouts.app')
@section('Title', 'Registro')
@section('Content')
<div class="container shadow-lg mt-5 p-4 justify-content-center">
    <h1 class="text-center">Registrate</h1>
    <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre Completo</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Ingresa un nombre y un apellido">
          </div>

          @error('name')
          <div class="alert alert-danger" role="alert">  
           {{ $message }}  
           </div>
        @enderror

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Ingresa tu email">
        </div>

        @error('email')
        <div class="alert alert-danger" role="alert">  
         {{ $message }}  
         </div>
      @enderror

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Contraseña</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Ingresa una contraseña segura">
        </div>

        @error('password')
        <div class="alert alert-danger" role="alert">  
         {{ $message }}  
         </div>
      @enderror

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirmar contraseña</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirma tu contarseña" id="password_confirmation">
          </div>
   

        
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input">
          <label class="form-check-label" >Acepto los terminos y condiciones</label>
        </div>

       <div class="justify-content-center container">
        <button type="submit" class="btn btn-primary">Registrar usuario</button>
       </div>
        

      </form>

</div>

@endsection