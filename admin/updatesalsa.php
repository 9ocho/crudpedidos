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
      <h2 class="text-uppercase text-secondary">Actualizar salsa</h2>
      <!-- Icon Divider -->
      <div class="divider-custom divider-dark">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
      
      <h6>Los siguientes son los datos seleccionados para actualizar:</h6>
    <div class="container text-center">
        <?php
            include("../conexion.php");
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $query = "SELECT * FROM salsas WHERE id_s = $id";
                $result = mysqli_query($conexion, $query);
                if(mysqli_num_rows($result) ==1) {
                    $row = mysqli_fetch_array($result);
                    $nombre = $row['nombre_s'];
                    $precio = $row['precio_s'];
                }
            }
        ?>
        <div class="d-flex flex-column align-items-center ">
            <form action="update.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre" value="<?php print $nombre;?>"
            class = "form-control" placeholder="Actualizar nombre">
            </div>
            <div class = "form-group">
            <label>Precio</label>
            <input type="number" name="precio" value="<?php print $precio;?>"
            class = "form-control" placeholder="Actualizar precio">
            </div>
            <button class="btn btn-success" name="updatesalsa">Actualizar</button>
            </form>
        </div>
    </div>
  </header>

  <!-- Footer -->
  <?php
    include "../footer.php"
  ?>
</body>

</html>
                