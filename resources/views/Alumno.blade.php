@extends('plantilla')


@section('titulo')
Alumno
@endsection

@section('content')

@if(session('mensaje'))
<div class="alert alert-success">
    {{session('mensaje')}}
</div>
@endif

<h3>Alumno</h3>

<a type="button" class="btn btn-primary" href="{{route('alumno.crear')}}">Nuevo Alumno</a>


<form method="POST" action="{{route('alumno.buscar')}}">
    <h4>Buscar</h4>
    @csrf
    <input name="texto_buscar" id="texto_buscar">
</form>

<table class="table table-bordered table-success">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Edad</th>
            <th scope="col">Numero_Identidad</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Direccion</th>
            <th scope="col">Nombre_Padre</th>
            <th scope="col">Nombre_Madre</th>
        </tr>
    </thead>
    <tbody>

        @forelse($alumnos as $alumno)
        <tr>
            <td scope="col">{{$alumno->id}}</td>
            <td scope="col">{{$alumno->identidad}}</td>
            <td scope="col">
                <a href="{{route('alumno.mostrar',['id'=> $alumno->id] )}}">{{$alumno->nombre." ".$alumno->apellido}}</a>
            </td>
            <td scope="col">{{$alumno->edad}}</td>
            <td scope="col">{{$alumno->numero_identidad}}</td>
            <td scope="col">{{$alumno->telefono}}</td>
            <td scope="col">{{$alumno->direccion}}</td>
            <td scope="col">{{$alumno->nombre_padre}}</td>
            <td scope="col">{{$alumno->nombre_madre}}</td>
            <td scope="col"> <a type="button" class="btn btn-warning"
                    href="{{route('alumno.editar',['id'=> $alumno->id] )}}">Editar</a> </td>
            <td scope="col" action="{{route('alumno.borrar',['id'=> $alumno->id] )}}">

                <form method="post" action="{{route('alumno.borrar',['id'=> $alumno->id] )}}"
                    onclick="return confirm('Desea Eliminar a este Alumno?')">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Eliminar" class="btn btn-danger">
                </form>
            </td>

        </tr>
        @empty
        <tr colspan='4'>
            <td>No hay Alumnos</td>
        </tr>
        @endforelse

    </tbody>
</table>

{{$alumnos->links()}}

@endsection