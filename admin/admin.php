<?php 
  session_start();
  if($_SESSION['idrol'] != 1)
  {
    header("location: ./");
  }
  
  include "../conexion.php";  

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
  <header class="masthead bg-ligth text-dark text-center">
    <div class="container d-flex align-items-center flex-column">
      <h1 class="submasthead-heading text-uppercase mb-0">Bienvenido</h1>
      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">ADMINISTRADOR</p>
    </div>
    <!-- Icon Divider -->
    <div class="divider-custom divider-dark">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon">
        <i class="fas fa-star"></i>
      </div>
      <div class="divider-custom-line"></div>
    </div>
  </header>

   <!-- Portfolio Section -->
  <section class="portfolio mb-3" id="portfolio">
    <div class="container">
      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading mb-5 text-center text-uppercase text-secondary">Agregar</h2>
      <!-- Portfolio Grid Items -->
      <div class="row">

        <!-- Portfolio Item 1 -->
      <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
            <a href="formpan.php">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="../img/portfolio/pan.png" alt="">
            </a>
          </div>
        </div>

        <!-- Portfolio Item 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
            <a href="formsalsa.php">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="../img/portfolio/salsa.png" alt="">
            </a>
          </div>
        </div>

        <!-- Portfolio Item 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
            <a href="formingrediente.php">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="../img/portfolio/granja.png" alt="">
            </a>
          </div>
        </div>
      <!-- /.row -->

    </div>
    
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Ver registros</h2>

    <!-- Portfolio Grid Items -->
    <div class="row">

      <!-- Portfolio Item 1 -->
    <div class="col-md-6 col-lg-4">
      <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
        <a href="formpan.php">
        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
          <div class="portfolio-item-caption-content text-center text-white">
            <i class="fas fa-plus fa-3x"></i>
          </div>
        </div>
        </a>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
        <a href="listas.php">
        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
          <div class="portfolio-item-caption-content text-center text-white">
            <i class="fas fa-plus fa-3x"></i>
          </div>
        </div>
        <img class="img-fluid" src="../img/portfolio/note.png" alt="">
        </a>
      </div>
    </div>

    <!-- Portfolio Item 3 -->
    <div class="col-md-6 col-lg-4">
      <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
        <a href="formingrediente.php">
        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
          <div class="portfolio-item-caption-content text-center text-white">
            <i class="fas fa-plus fa-3x"></i>
          </div>
        </div>
        </a>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <?php
    include "../footer.php"
  ?>

</body>

</html>
