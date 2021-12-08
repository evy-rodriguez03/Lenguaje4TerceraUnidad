@extends('plantilla')


@section('titulo')
Profesor
@endsection

@section('content')

@if(session('mensaje'))
<div class="alert alert-success">
    {{session('mensaje')}}
</div>
@endif

<h3>Profesor</h3>

<a type="button" class="btn btn-primary" href="{{route('profesor.crear')}}">Nuevo Profesor</a>


<form method="POST" action="{{route('profesor.buscar')}}">
    <h4>Buscar</h4>
    @csrf
    <input name="texto_buscar" id="texto_buscar">
</form>

<table class="table table-bordered table-success">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Numero_Identidad</th>
            <th scope="col">Fecha_nac</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Direccion</th>
            <th scope="col">Especialidad</th>
        </tr>
    </thead>
    <tbody>

        @forelse($profesores as $profesor)
        <tr>
            <td scope="col">{{$profesor->id}}</td>
            <td scope="col">{{$profesor->identidad}}</td>
            <td scope="col">
                <a href="{{route('profesor.mostrar',['id'=> $profesor->id] )}}">{{$profesor->nombre." ".$profesor->apellido}}</a>
            </td>
            <td scope="col">{{$profesor->numero_identidad}}</td>
            <td scope="col">{{$profesor->fecha_nac}}</td>
            <td scope="col">{{$profesor->telefono}}</td>
            <td scope="col">{{$profesor->direccion}}</td>
            <td scope="col">{{$profesor->especialidad}}</td>
            <td scope="col"> <a type="button" class="btn btn-warning"
                    href="{{route('profesor.editar',['id'=> $profesor->id] )}}">Editar</a> </td>
            <td scope="col" action="{{route('profesor.borrar',['id'=> $profesor->id] )}}">

                <form method="post" action="{{route('profesor.borrar',['id'=> $profesor->id] )}}"
                    onclick="return confirm('Desea Eliminar a este Profesor?')">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Eliminar" class="btn btn-danger">
                </form>
            </td>

        </tr>
        @empty
        <tr colspan='4'>
            <td>No hay Profesor</td>
        </tr>
        @endforelse

    </tbody>
</table>

{{$profesores->links()}}

@endsection