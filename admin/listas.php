<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>crud</title>

  <!-- Custom fonts for this theme -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="../css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <?php
    include("navegacion.php");
  ?>

  <!-- Masthead -->
  <header class="masthead bg-ligth text-secondary text-center">
      

      <!-- Masthead Heading -->
      <h2>ADMINISTRADOR</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-dark">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
      
      <h2 class="text-uppercase text-secondary">Listas</h2>
    <div class="container text-center">

      <!-- Masthead Subheading -->

      <!-- Icon Divider -->
     
      <a href="panes.php"><button class="btn btn-dark btn-lg ">PANES</button></a>
      <a href="salsas.php"><button class="btn btn-dark btn-lg">SALSAS</button></a>
      <a href="ingredientes.php"><button class="btn btn-dark btn-lg">INGREDIENTES</button></a><br>
      <a href="pedidos.php"><button class="btn btn-dark btn-lg mt-5">PEDIDOS</button></a>
    </div>
  </header>

  <!-- Footer -->
  <?php
    include "../footer.php"
  ?>

</body>

</html>
