<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>sandwichtian</title>

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
    include "../navegacion.php"
  ?>

  <!-- Masthead -->
  <header class="masthead bg-ligth text-dark text-center">
    <div class="container d-flex align-items-center flex-column">
      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-success">Pedido realizado</h1>
      
      <div class="divider-custom divider-dark">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon">
              <i class="fas fa-angle-double-down fa-lg"></i>
          </div>
          <div class="divider-custom-line"></div>
      </div>
        <?php
          $precio = $_REQUEST["precio"];
          echo "<h5>Valor $$precio pesos</h5>";
        ?>
      <h4 class="mb-5">Pronto llegará a tu puerta</h4>
      <a class="btn btn-lg btn-warning" href="../cliente.php" role="button">Volver a inicio</a>
    </div>
  </header>


  <!-- Footer -->
  <?php
    include "../footer.php"
  ?>

</body>

</html>
