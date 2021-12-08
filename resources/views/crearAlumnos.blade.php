@extends('plantilla')


@section('titulo')
Alumno
@endsection

@section('content')

<h1>Nuevo Alumno</h1>

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
  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba el nombre">
</div>

<div class="mb-3">
  <label for="apellido" class="form-label">Apellidos</label>
  <input type="text" class="form-control" id="apellidos" name="apellido" placeholder="Escriba el Apellido">
</div>

<div class="mb-3">
  <label for="edad" class="form-label">Edad</label>
  <input type="text" class="form-control" id="edad" name="edad" placeholder="Escriba la edad">
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
  <label for="nombre_padre" class="form-label">Nombre_padre</label>
  <input type="text" class="form-control" id="nombre_padre" name="nombre_padre" placeholder="Ingrese nombre de la padre">
</div>

<div class="mb-3">
  <label for="nombre_madre" class="form-label">Nombre_madre</label>
  <input type="text" class="form-control" id="nombre_madre" name="nombre_madre" placeholder="Ingrese nombre de la madre">
</div>

<button type="submit" class="btn btn-info"> Guardar </button>
<button type="reset" class="btn btn-danger"> Reestablecer </button>

</form>


@endsection