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
    include("navegacion.php")
  ?>

  <!-- Masthead -->

  <header class="masthead bg-ligth text-secondary text-center">
       <!-- Icon Divider -->
       <h3>REGISTRAR PAN</h3>
      <div class="divider-custom divider-dark">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
    <div class="container d-flex align-items-center flex-column">
  <form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nombrepn">Nombre del pan</label>
    <input type="text" required name="nombre" class="form-control text-center" id="nombrepn" placeholder="Ingrese nombre del pan">
  </div>
  <div class="form-group">
    <label for="preciopn">Precio</label>
    <input type="number" required name="precio" class="form-control text-center" id="preciopn" placeholder="Ingrese precio del pan">
  </div>
  <div class="form-group">
    <label for="imagenpn">Imagen</label>
    <input type="file" name="imagen" id="imagenpn" class="form-control">
  </div>
  <button type="submit" name="regpan" class="btn btn-warning">Enviar</button>
</form>
    <?php
      include("../registro.php");
    ?>
     
    </div>
  </header>
  <?php
    include "../footer.php"
  ?>

</body>

</html>