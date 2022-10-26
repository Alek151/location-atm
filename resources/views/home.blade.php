@extends('layouts.app')
@section('Title', 'Home')
    
@section('Content')
  <div class="container">
    <div class="p-5 bg-light rounded-3 m-5">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold">Bienvenidos al sistema</h1>
          <p class="col-md-8 fs-4">Con el siguiente sistema podrás llevar el control de tus unidades ATM a lo largo de municipios y departamentos en el país de Guatemala, únicamente debes gestionar y mantener actualizada en tiempo real todas tus unidades</p>
          <a href="{{ url('registro') }}" class="btn btn-success">Ver mis unidades</a>
        </div>
      </div>
  </div>

  <div id="map">

    
  </div>
<script src="script.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>

<style>
  #map {
	height: 500px;
	width: 100%;
}
</style>

<script>
  function iniciarMap(){
    var coord = {lat:-34.5956145 ,lng: -58.4431949};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}
</script>

@endsection