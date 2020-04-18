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

  <header class="masthead text-secondary bg-ligth text-center" style="background-image: url('img/ingredientes.jpg'); background-repeat: no-repeat;background-position: center;background-size: cover;">
       <!-- Icon Divider -->
       <h3>REGISTRAR INGREDIENTE</h3>
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
    <label for="nombreing">Nombre del ingrediente</label>
    <input type="text" required name="nombre" class="form-control text-center" id="nombreing" placeholder="Ingrese nombre del ingrediente">
  </div>
  <div class="form-group">
    <label for="precioing">Precio</label>
    <input type="text" required name="precio" class="form-control text-center" id="precioing" placeholder="Ingrese precio del ingrediente">
  </div>
  <div class="form-group">
    <label for="imagening">Imagen</label>
    <input type="file" required name="imagen" id="imagening" class="form-control">
  </div>
  <button type="submit" required name="regingre" class="btn btn-warning">Enviar</button>
</form>
    <?php
      include("../registro.php");
    ?>
      <!-- Masthead Avatar Image -->
     
    </div>
  </header>
  <?php
    include "../footer.php"
  ?>

</body>

</html>