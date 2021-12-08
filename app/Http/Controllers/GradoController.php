<<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradoController extends Controller
{
    public function index()
    {
        $em = Grado::paginate(10);
        return view('em')->with('em', $em);
    }

    public function crear()
    {
        return view('nuevo');
    }

    public function mostrar($id)
    {
        $em = Grado::findOrFail($id);
        return view('ver')->with('grado', $em);
    }


    public function guardar(Request $request)
    {
        $nuevoGrado = new Grado();
        $nuevoGrado->seccion = $request->seccion;
        $nuevoGrado->grado = $request->grado;
    

        return redirect()->route('grado.index')->with('mensaje', 'El Grado fue registrado exitosamente');
    }


    public function buscar(Request $request)
    {
        $em =  Grado::where('seccion', 'like', '%' . $request->texto_buscar . '%')->paginate(10);
        return view('grado')->with('em', $em);
    }

    public function eliminar($id)
    {
        Grado::destroy($id);
        return redirect()->route('grado.index')->with('mensaje', 'Eliminado con exito.');
    }


    public function editar($id)
    {
        $em = Grado::findOrFail($id);
        return view('editar')->with('grado', $em);
    }




    public function actualizar(Request $request, $id)
    {
        $nuevoGrado = Grado::findOrFail($id);

        $nuevoGrado = new Grado();
        $nuevoGrado->seccion = $request->seccion;
        $nuevoGrado->grado = $request->grado;

        return redirect()->route('grado.index')->with('mensaje', 'El grado fue actualizado exitosamente');
    }
}
