<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function index()
    {
        $em = Matricula::paginate(10);
        return view('em')->with('em', $em);
    }

    public function crear()
    {
        return view('nuevo');
    }


    public function mostrar($id)
    {
        $em = Matricula::findOrFail($id);
        return view('ver')->with('matricula', $em);
    }



    public function guardar(Request $request)
    {
        $nuevoMatricula = new Matricula();
        $nuevoMatricula->anio = $request->anio;
        $nuevoMatricula->seccion = $request->seccion;
        $nuevoMatricula->grupo = $request->grupo;

        return redirect()->route('matricula.index')->with('mensaje', 'la Matricula fue registrado exitosamente');
    }



    public function buscar(Request $request)
    {
        $em =  Matricula::where('nombre', 'like', '%' . $request->texto_buscar . '%')->paginate(10);
        return view('matricula')->with('em', $em);
    }

    public function eliminar($id)
    {
        Matricula::destroy($id);
        return redirect()->route('matricula.index')->with('mensaje', 'Eliminado con exito.');
    }



    public function editar($id)
    {
        $em = Matricula::findOrFail($id);
        return view('editar')->with('matricula', $em);
    }





    public function actualizar(Request $request, $id)
    {
        $nuevoMatricula = Matricula::findOrFail($id);

        $nuevoMatricula = new Matricula();
        $nuevoMatricula->anio = $request->anio;
        $nuevoMatricula->seccion = $request->seccion;
        $nuevoMatricula->grupo = $request->grupo;


        return redirect()->route('matricula.index')->with('mensaje', 'La Matricula fue modificado exitosamente');
    }
}

