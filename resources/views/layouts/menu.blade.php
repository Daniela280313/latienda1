<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('materialize/css/materialize.css') }}" />
    <title>TiendaPHP</title>
</head>
<body>
<nav class="#ff9800 orange">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo center">LatiendaPHP</a>
      <ul class="left hide-on-med-and-down">
        <li><a href="sass.html">Productos</a></li>
        <li><a href="badges.html">Pedidos</a></li>
        <li class="active"><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>
<div class="container">
    @yield('contenido')
    <script src="{{ asset('materialize/js/materialize.js')  }}"></script>
</div>
  
</body>
</html>