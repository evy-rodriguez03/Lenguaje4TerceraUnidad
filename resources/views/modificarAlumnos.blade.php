@extends('plantilla')


@section('titulo')
Alumno
@endsection

@section('content')

<h1>Editar Alumno</h1>

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li> {{$error}}</li>
        @endforeach
    </ul>
 </div>
@endif

<form method="post" action="{{route('alumno.editar',['id'=>$alumno->id])}}">

    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" value="{{$alumno->nombre}}" class="form-control" id="nombre" name="nombre" placeholder="Escriba el nombre">
      </div>

      <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" value="{{$alumno->apellido}}" class="form-control" id="apellido" name="apellido" placeholder="Escriba el Apellido">
      </div>

      <div class="mb-3">
        <label for="edad" class="form-label">Edad</label>
        <input type="text" value="{{$alumno->edad}}" class="form-control" id="edad" name="edad" placeholder="Escriba la Edad">
      </div>

      <div class="mb-3">
        <label for="identidad" class="form-label">Identidad</label>
        <input type="text" value="{{$alumno->identidad}}" class="form-control" id="identidad" name="identidad" placeholder="Escriba la Identidad">
      </div>

      <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="text" value="{{$alumno->telefono}}" class="form-control" id="telefono" name="telefono" placeholder="Escriba el Telefono">
      </div>

      <div class="mb-3">
        <label for="direccion" class="form-label">Direccion</label>
        <input type="text" value="{{$alumno->direccion}}" class="form-control" id="direccion" name="direccion" placeholder="Ingrese laDireccion">
      </div>

      <div class="mb-3">
        <label for="nombre_padre" class="form-label">Nombre Padre</label>
        <input type="text" value="{{$alumno->nombre_padre}}" clreass="form-control" id="nombre_padre" name="nombre_padre" placeholder="Escriba el Nombre del Padre">
      </div>

      <div class="mb-3">
        <label for="nombre_madre" class="form-label">Nombre Madre</label>
        <input type="text" value="{{$alumno->nombre_madre}}" clreass="form-control" id="nombre_madre" name="nombre_madre" placeholder="Escriba el Nombre del Madre">
      </div>

      
<button type="submit" class="btn btn-info"> Modificar </button>

</form>


@endsection
