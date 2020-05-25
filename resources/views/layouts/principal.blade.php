<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Mi Primera Web</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><strong>Menú</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{route('clientes.index')}}">Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('autos.index')}}">Autos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('revisiones.index')}}">Revisión</a>
      </li>
    </ul>

  </div>
</nav>
<br>
 @yield('content')

</body>
</html>