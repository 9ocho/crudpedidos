<?php 
  session_start();
  if($_SESSION['idrol'] != 2)
  {
    header("location: ./");
  }
  
  include "conexion.php";  

 ?>
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

  <!-- Navigation -->
  <?php
    include("navegacion.php")
  ?>

  <!-- Masthead -->
  <header class="masthead bg-ligth text-dark text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-5" src="img/header.png" alt="">

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0">Bienvenido</h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-dark">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">USUARIO</p><br>
      <a href="armarlo/index.html"><button class="btn btn-warning btn-lg ">Hacer pedido</button></a>
    </div>
  </header>


 <?php
  include "footer.php"
 ?>

</body>

</html>
