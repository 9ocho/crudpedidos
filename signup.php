<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>crud</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <nav class="navbar navbar-expand-lg bg-warning text-uppercase fixed-top" id="mainNav">
  <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.html">Crud pedidos</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-warning text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
          <li class="mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white" href="index.html">Inicio</a>
          </li>
          <li class="mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white" href="login.php">Ingresar</a>
          </li>
      </ul>
      </div>
  </div>
  </nav>
  <!-- Masthead -->

  <header class="masthead bg-ligth text-secondary text-center">
    <div class="divider-custom divider-light">
      <h3 class="text-center">REGISTRARSE</h3>  
    </div>
  <div class="container d-flex align-items-center flex-column">

    <form method="post">
      <div class="form-group">
        <label for="name">Nombre completo</label>
        <input name="nombre" id="name" required type="text" class="form-control" placeholder="Ingrese nombre completo">
      </div>
      <div class="form-group">
        <label for="tel">Telefono</label>
        <input name="telefono" id="tel" required type="text" onkeypress='return validaNumericos(event)' class="form-control" placeholder="Ingrese número telefónico">
      </div>
      <script>
      function validaNumericos(event) {
        if(event.charCode >= 48 && event.charCode <= 57){
          return true;
        }
        return false;        
      }
      </script>
      <div class="form-group">
        <label for="email">Dirección de correo electrónico</label>
        <input name="email" id="email" required type="email" class="form-control" placeholder="Ingrese correo electrónico">
      </div>
      <div class="form-group">
        <label for="email">Dirección para envios</label>
        <input name="direccion" id="dir" required class="form-control" placeholder="Ingrese direccion de domicilio">
      </div>
      <div class="form-group">
        <label for="pass">Contraseña</label>
        <input name="password" id="pass" required type="password" class="form-control" placeholder="Ingrese contraseña">
      </div>
      <button type="submit" name="registro" class="btn btn-warning">Enviar</button>
    </form>
    <?php
      include("registro.php");
    ?>
    <small class="form-text text-muted">¿Ya tienes una cuenta?<a href="login.php" class="text-secondary"> Inicia sesión</a></small>
      <!-- Masthead Avatar Image -->
     
    </div>
    </header>

      <?php
        include "footer.php"
      ?>

</body>

</html>