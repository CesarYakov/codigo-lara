<!DOCTYPE html>
<html>
  <head>
    <title>
    home
    </title>@yield('title')</title>
  </head>

  <body>
    <nav>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="nosotros">Nosotros</a></li>
        <li><a href="servicios">Servicios</a></li>
        <li><a href="contacto">Contacto</a></li>
      </ul>
    </nav> 
    @yield('content')
  </body>

</html>