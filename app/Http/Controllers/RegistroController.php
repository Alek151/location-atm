<?php

namespace App\Http\Controllers;

use App\Models\registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
 
    public function index()
    {
        $datos['registros']= registro::paginate(5);
        return view('partials.index', $datos);
    }

  
    public function create()
    {
        return view('partials.create');
    }

    public function store(Request $request)
    {
        $datos = request()->except('_token');
        Registro::insert($datos);
        return redirect('registro')->with('mensaje', 'ATM registrado con éxito');
    }

  
    public function show(registro $registro)
    {
        
    }

 
    public function edit($id)
    {
        $registro = registro::findOrFail($id);
        return view('partials.editar', compact('registro'));
    }

 
    public function update(Request $request, $id)
    {
        $datosRegistro = request()->except(['_token', '_method']);
        $registro = registro::findOrFail($id);
        registro::where('id', '=', $id)->update($datosRegistro);

        $datos['registros']= registro::paginate(5);
        return view('partials.index', $datos);
    }

    public function destroy($id)
    {
        registro::findOrFail($id);
        registro::destroy($id);
        return redirect('registro');
    }
}
