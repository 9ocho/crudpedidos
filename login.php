<?php 
session_start();
if(!empty($_SESSION['active']))
{
 if($_SESSION['idrol'] == 1){
        header('location: admin/admin.php');
      }elseif ($_SESSION['idrol'] == 2) {
        header('location: cliente.php');
      }else{
        echo "Usted no es ningun usuario...";
      }
}else{

  if(!empty($_POST))
  {
    if(empty($_POST['usuario']) || empty($_POST['clave']))
    {
      $alert = 'Ingrese su usuario y su calve';
    }else{

      require_once "conexion.php";

      $user = mysqli_real_escape_string($conexion,$_POST['usuario']);
      $pass =md5(mysqli_real_escape_string($conexion,$_POST['clave']));

      $query = mysqli_query($conexion,"SELECT * FROM `usuarios` WHERE email= '$user' AND contra = '$pass'");
      mysqli_close($conexion);
      $result = mysqli_num_rows($query);
     
  
      if($result > 0)
      {
     
        $data = mysqli_fetch_array($query);
        $_SESSION['active'] = true;
        $_SESSION['iduser'] = $data['iduser'];
        $_SESSION['user'] = $data['user'];
        $_SESSION['email']  = $data['email'];
        $_SESSION['telefono']   = $data['telefono'];
        $_SESSION['idrol']    = $data['idrol'];
      
      if($data['idrol'] == 1){
        header('location: admin/admin.php');
      }elseif ($data['idrol'] == 2) {
        header('location: cliente.php');
      }else{
        echo "Usted no es ningun usuario..";
      }

       
      }else{
        $alert = 'El usuario o la clave son incorrectos';
        session_destroy();
      }


    }

  }
}
 ?>
<!DOCTYPE html>
<html lang="es">

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

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-warning text-uppercase fixed-top" id="mainNav">
  <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="cliente.php">Crud pedidos</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-warning text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
          <li class="mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white" href="cliente.php">Inicio</a>
          </li>
          <li class="mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white" href="salir.php">Salir</a>
          </li>
      </ul>
      </div>
  </div>
  </nav>
  
  <!-- Masthead -->

  <header class="masthead bg-ligth text-secondary text-center">
       <!-- Icon Divider -->
       <h3>INGRESAR</h3>
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
    <div class="container d-flex align-items-center flex-column">
      <form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Dirección de correo electrónico</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="usuario" aria-describedby="emailHelp" placeholder="Ingrese correo electrónico">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="clave" placeholder="Ingrese contraseña">
  </div>
  <button type="submit" class="btn btn-warning">Enviar</button>
</form><br>

<small class="form-text text-muted">¿No tienes una cuenta?<a href="signup.php" class="text-secondary"> Registrate</a></small>
      <!-- Masthead Avatar Image -->
     
    </div>
  </header>

  <?php
    include "footer.php"
  ?>

</body>

</html>
