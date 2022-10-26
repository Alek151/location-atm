@extends('layouts.app')
@section('Title', 'Sistema')

@section('Content')
    <a class="btn btn-warning mx-5 rounded mt-1" href="{{ url('/') }}">INICIO</a>
    <div class="container-sm justify-content-center">
        <h1 class="text-center mt-4">Unidades al momento</h1>
    </div>

    <div>
        <a href="{{ url('registro/create') }}" class="btn btn-success mx-5">Agregar un nuevo ATM</a>
        <div class="table-responsive m-5">
            <table
                class="table table-striped-columns
    table-hover	
    table-borderless
    table-striped
    table-dark
    align-middle ">
                <thead class="table-light">
                    <caption>Localizaciones ATM</caption>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Ubicado en</th>
                        <th>Latitud</th>
                        <th>Longitud</th>
                        <th>Fecha instalación</th>
                        <th>Serie</th>
                        <th>Dias para Mantenimiento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
      

                <tbody class="table-group-divider">
                    @foreach ($registros as $registro)
                        <tr class="table text-center">
                            <td>{{ $registro->id }}</td>
                            <td>{{ $registro->Nombre_CC }}</td>
                            <td>{{ $registro->Latitud }}</td>
                            <td>{{ $registro->Longitud }}</td>
                            <td>{{ $registro->Fecha_inst }}</td>
                            <td>{{ $registro->Serie }}</td>
                            <td>{{ $registro->D_p_M }}</td>
                            <td>
                               
                                  <a href="{{ url('registro/'.$registro->id.'/edit') }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ url('registro/' . $registro->id) }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input type="submit" name="id" class="btn btn-danger" value="Eliminar"
                                            onclick="return confirm('Deseas realmente borrar?')">
                                    </form>
                                    
                                

                            </td>


                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                </tfoot>
            </table>
            {{ $registros->links() }}
        </div>
    </div>



@endsection
