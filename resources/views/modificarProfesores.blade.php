@extends('plantilla')


@section('titulo')
Profesor
@endsection

@section('content')

<h1>Editar Profesor</h1>

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li> {{$error}}</li>
        @endforeach
    </ul>
 </div>
@endif

<form method="post" action="{{route('profesor.editar',['id'=>$profesor->id])}}">

    @csrf
    <div class="mb-3">
        <label for="nombres" class="form-label">Nombre</label>
        <input type="text" value="{{$profesor->nombres}}" class="form-control" id="nombres" name="nombres" placeholder="Ingrese el nuevo Nombre">
      </div>

      <div class="mb-3">
        <label for="apellidos" class="form-label">Apellido</label>
        <input type="text" value="{{$profesor->apellidos}}" class="form-control" id="apellidos" name="apellidos" placeholder="Escriba el Apellido">
      </div>

      <div class="mb-3">
        <label for="numero_identidad" class="form-label">Identidad</label>
        <input type="text" value="{{$profesor->numero_identidad}}" class="form-control" id="numero_identidad" name="numero_identidad" placeholder="Escriba El Numero de Identidad">
      </div>

      <div class="mb-3">
        <label for="fecha_nac" class="form-label">Apellido</label>
        <input type="text" value="{{$profesor->fecha_nac}}" class="form-control" id="fecha_nac" name="fecha_nac" placeholder="Escriba La fecha de Nacimiento">
      </div>

      <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="text" value="{{$profesor->telefono}}" class="form-control" id="telefono" name="telefono" placeholder="Escriba el Telefono">
      </div>

      <div class="mb-3">
        <label for="direccion" class="form-label">Direccion</label>
        <input type="text" value="{{$profesor->direccion}}" class="form-control" id="direccion" name="direccion" placeholder="Ingrese laDireccion">
      </div>

      <div class="mb-3">
        <label for="especialidad" class="form-label">Especialidad</label>
        <input type="text" value="{{$profesor->especialidad}}" clreass="form-control" id="especialidad" name="especialidad" placeholder="Escriba la Especialidad">
      </div>

      
<button type="submit" class="btn btn-info"> Actualizar </button>

</form>


@endsection
