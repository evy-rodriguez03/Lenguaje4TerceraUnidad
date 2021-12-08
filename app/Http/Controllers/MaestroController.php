<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaestroController extends Controller
{
    public function index()
    {
        $em = Maestro::paginate(10);
        return view('em')->with('em', $em);
    }

    public function crear()
    {
        return view('nuevo');
    }


    public function mostrar($id)
    {
        $em = Maestro::findOrFail($id);
        return view('ver')->with('maestro', $em);
    }



    public function guardar(Request $request)
    {
        $nuevoMaestro = new Maestro();
        $nuevoMaestro->nombre = $request->nombre;
        $nuevoMaestro->apellidos = $request->apellidos;
        $nuevoMaestro->numero_identidad = $request->numero_identidad;
        $nuevoMaestro->fecha_nac = $request->fecha_nac;
        $nuevoMaestro->telefono = $request->telefono;
        $nuevoMaestro->direccion = $request->direccion;
        $nuevoMaestro->especialidad = $request->especialidad;

        return redirect()->route('maestro.index')->with('mensaje', 'El Maestro fue registrado exitosamente');
    }



    public function buscar(Request $request)
    {
        $em =  Maestro::where('nombre', 'like', '%' . $request->texto_buscar . '%')->paginate(10);
        return view('alumnos')->with('em', $em);
    }

    public function eliminar($id)
    {
        Maestro::destroy($id);
        return redirect()->route('maestro.index')->with('mensaje', 'Eliminado con exito.');
    }



    public function editar($id)
    {
        $em = Maestro::findOrFail($id);
        return view('editar')->with('maestro', $em);
    }





    public function actualizar(Request $request, $id)
    {
        $nuevoMaestro = Maestro::findOrFail($id);

        $nuevoMaestro = new Maestro();
        $nuevoMaestro->nombre = $request->nombre;
        $nuevoMaestro->apellidos = $request->apellidos;
        $nuevoMaestro->numero_identidad = $request->numero_identidad;
        $nuevoMaestro->fecha_nac = $request->fecha_nac;
        $nuevoMaestro->telefono = $request->telefono;
        $nuevoMaestro->direccion = $request->direccion;
        $nuevoMaestro->especialidad = $request->especialidad;
        


        return redirect()->route('maestro.index')->with('mensaje', 'El Maestro fue modificado exitosamente');
    }
}
