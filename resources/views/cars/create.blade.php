@extends('layouts.principal')
@section('title', 'Página de Autos')
@section('content')

<div align="center">
    <div class="card border-primary mb-3" style="max-width: 50rem;" align="justify">
        <div class="card-header"><h3>Formulario de Autos</h3></div>
        <div class="card-body">
    <form action="{{route('autos.store')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="mark">Marca</label>
      <input type="text" name="mark" class="form-control" placeholder="Ingrese la marca">
    </div>
    <div class="form-group">
      <label for="model">Modelo</label>
      <input type="text" name="model" class="form-control" placeholder="Ingrese el modelo">
    </div>
    <div class="form-group">
      <label for="price">Precio</label>
      <input type="text" name="price" class="form-control" placeholder="Ingrese el precio">
    </div>
    <div class="form-group">
        <select name="clients_id" id="input" class="form-control">
            <option value="0">Seleccione el cliente</option>
            @foreach($clients as $client)
            <option value="{{$client['id']}}">{{$client['name']}}</option>
          @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Agregar</button>
</form>
        </div>
    </div>
</div>

@endsection