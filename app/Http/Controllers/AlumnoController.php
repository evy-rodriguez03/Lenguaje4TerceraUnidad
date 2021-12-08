<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $em = Empleado::paginate(10);
        return view('em')->with('em', $em);
    }

    public function crear()
    {
        return view('nuevo');
    }


    public function mostrar($id)
    {
        $em = Alumno::findOrFail($id);
        return view('ver')->with('alumno', $em);
    }



    public function guardar(Request $request)
    {
        $nuevoAlumno = new Alumno();
        $nuevoAlumno->nombre = $request->nombre;
        $nuevoAlumno->apellidos = $request->apellidos;
        $nuevoAlumno->edad = $request->edad;
        $nuevoAlumno->numero_identidad = $request->numero_identidad;
        $nuevoAlumno->telefono = $request->telefono;
        $nuevoAlumno->direccion = $request->direccion;
        $nuevoAlumno->nombre_padre = $request->nombre_padre;
        $nuevoAlumno->nombre_madre = $request->nombre_madre;

        return redirect()->route('alumno.index')->with('mensaje', 'El Alumno fue registrado exitosamente');
    }



    public function buscar(Request $request)
    {
        $em =  Alumno::where('nombre', 'like', '%' . $request->texto_buscar . '%')->paginate(10);
        return view('alumnos')->with('em', $em);
    }

    public function eliminar($id)
    {
        Alumno::destroy($id);
        return redirect()->route('alumno.index')->with('mensaje', 'Eliminado con exito.');
    }



    public function editar($id)
    {
        $em = Alumno::findOrFail($id);
        return view('editar')->with('alumno', $em);
    }





    public function actualizar(Request $request, $id)
    {
        $nuevoAlumno = Alumno::findOrFail($id);

        $nuevoAlumno = new Alumno();
        $nuevoAlumno->nombre = $request->nombre;
        $nuevoAlumno->apellidos = $request->apellidos;
        $nuevoAlumno->edad = $request->edad;
        $nuevoAlumno->numero_identidad = $request->numero_identidad;
        $nuevoAlumno->telefono = $request->telefono;
        $nuevoAlumno->direccion = $request->direccion;
        $nuevoAlumno->nombre_padre = $request->nombre_padre;
        $nuevoAlumno->nombre_madre = $request->nombre_madre;


        return redirect()->route('alumno.index')->with('mensaje', 'El Alumno fue modificado exitosamente');
    }
}
