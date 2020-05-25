@extends('layouts.principal')
@section('title', 'Página de Clientes')
@section('content')
<div align="center">
<div class="card border-primary mb-3" style="max-width: 50rem;" align="justify">
  <div class="card-header"><h2>Formulario de Registro de Clientes</h2> </div>
  <div class="card-body">
    <form action="{{route('clientes.store')}}" method="post">
    @csrf
        <div class="form-group">
            <label for="last_name">Nombres</label>
            <input type="text" class="form-control" name="name"  placeholder="Ingrese sus nombres">
        </div>
        <div class="form-group">
            <label for="lastname">Apellidos</label>
            <input type="text" class="form-control" name="last_name"  placeholder="Ingrese sus apellidos">
        </div>
        <div class="form-group">
            <label for="address">Dirección</label>
            <input type="text" class="form-control" name="address"  placeholder="Ingrese la dirección">
        </div>
        <div class="form-group">
            <label for="date">Fecha</label>
            <input type="date" class="form-control" name="date">
        </div>
        <div class="form-group">
            <label for="email">Correo</label>
            <input type="text" class="form-control" name="email"  placeholder="Ingrese el Correo Electrónico">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
  </div>
</div>
</div>

@endsection