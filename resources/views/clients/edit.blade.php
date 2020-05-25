@extends('layouts.principal')
@section('title', 'Página de Clientes')
@section('content')
<div align="center">
<div class="card border-primary mb-3" style="max-width: 50rem;" align="justify">
  <div class="card-header"><h2>Editando Cliente {{$client->name}}</h2> </div>
  <div class="card-body">
    <form action="{{route('clientes.update', $client)}}" method="post">
    @csrf
    @method('PATCH')
        <div class="form-group">
            <label for="last_name">Nombres</label>
            <input type="text" class="form-control" name="name"  placeholder="Ingrese sus nombres"  value="{{$client->name}}">
        </div>
        <div class="form-group">
            <label for="lastname">Apellidos</label>
            <input type="text" class="form-control" name="last_name"  placeholder="Ingrese sus apellidos" value="{{$client->last_name}}">
        </div>
        <div class="form-group">
            <label for="address">Dirección</label>
            <input type="text" class="form-control" name="address"  placeholder="Ingrese la dirección" value="{{$client->address}}">
        </div>
        <div class="form-group">
            <label for="email">Correo</label>
            <input type="text" class="form-control" name="email"  placeholder="Ingrese el Correo Electrónico" value="{{$client->email}}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
    <hr>
    <form method="POST" action="{{route('clientes.destroy', $client)}}">
    @csrf
    @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
  </div>
</div>
</div>

@endsection