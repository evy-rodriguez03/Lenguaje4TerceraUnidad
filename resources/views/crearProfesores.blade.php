@extends('plantilla')


@section('titulo')
Profesor
@endsection

@section('content')

<h1>Nuevo Profesor</h1>

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li> {{$error}}</li>
        @endforeach
    </ul>
 </div>
@endif

<form method="POST" action="{{route('alumno.guardar')}}">
    @csrf

<div class="mb-3">
  <label for="nombre" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="nombres" name="nombre" placeholder="Escriba el nombre">
</div>

<div class="mb-3">
  <label for="apellido" class="form-label">Apellidos</label>
  <input type="text" class="form-control" id="apellidos" name="apellido" placeholder="Escriba el Apellido">
</div>

<div class="mb-3">
  <label for="identidad" class="form-label">Numero_Identidad</label>
  <input type="text" class="form-control" id="numero_identidad" name="identidad" placeholder="Escriba la Identidad">
</div>

<div class="mb-3">
  <label for="fecha_nac" class="form-label">Fecha_Nacimiento</label>
  <input type="text" class="form-control" id="fecha_nac" name="fecha_nac" placeholder="Escriba la fecha de nacimiento">
</div>

<div class="mb-3">
  <label for="telefono" class="form-label">Teléfono</label>
  <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Escriba el Telefono">
</div>

<div class="mb-3">
  <label for="direccion" class="form-label">Direccion</label>
  <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese su direccion">
</div>

<div class="mb-3">
  <label for="especialidad" class="form-label">Especialidad</label>
  <input type="text" class="form-control" id="especialidad" name="especialidad" placeholder="Escriba su especialidad">
</div>

<button type="submit" class="btn btn-info"> Guardar </button>
<button type="reset" class="btn btn-danger"> Reestablecer </button>

</form>


@endsection