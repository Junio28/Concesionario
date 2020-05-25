@extends('layouts.principal')
@section('title', 'Página de Clientes')
<?php $message=Session::get('message')?>
@section('content')

@if($message == 'store')
<div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <p>Los datos han sido creados con éxito!!</p>
</div>
@endif

@if($message == 'update')
<div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <p>Los datos han sido editados con éxito!!</p>
</div>
@endif
@if($message == 'delete')
<div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <p>El datos ha sido eliminado con éxito!!</p>
</div>
@endif
<div align="center">
<div class="card border-primary mb-3" style="max-width: 70rem;" align="justify">
  <div class="card-header"><h2>Página principal de Clientes</h2> </div>
  <div class="card-body">
    <table class="table table-striped">
        <thead>
            <tr>
              <th>ID</th>
              <th>NOMBRES</th>
              <th>APELLIDOS</th>
              <th>DIRECCIÓN</th>
              <th>FECHA</th>
              <th>CORREO ELECTRÓNICO</th>
              <th colspan="2">ACCIÓN</th>
            </tr>
        </thead>
        <tbody>
         @foreach($clients as $client)
          <tr>
            <td>{{$client->id}}</td>
            <td>{{$client->name}}</td>
            <td>{{$client->last_name}}</td>
            <td>{{$client->address}}</td>
            <td>{{$client->date}}</td>
            <td>{{$client->email}}</td>
            <td><a href="{{route('clientes.edit',  $client->id)}}" class="btn btn-warning">Editar</a></td>
            <td>
            <form method="POST" action="{{route('clientes.destroy', $client)}}">
                @csrf
                @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminarlo?');">Eliminar</button>
            </form>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
    <a href="{{route('clientes.create')}}" class="btn btn-primary">Agregar</a>
    <hr>
  {!!$clients->render()!!}
  </div>
</div>
</div>

@endsection