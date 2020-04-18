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
  <?php
    include("navegacion.php");
  ?>

  <!-- Masthead -->
  <header class="masthead bg-ligth text-dark text-center">
      <!-- Masthead Heading -->
      <h2 class="text-uppercase text-secondary">Actualizar dirección</h2>
      <!-- Icon Divider -->
      <div class="divider-custom divider-dark">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
      
      <h6>Datos seleccionado para actualizar:</h6>
    <div class="container text-center">
        <?php
            include("conexion.php");
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $query = "SELECT direccion FROM usuarios WHERE iduser = $id";
                $result = mysqli_query($conexion, $query);
                if(mysqli_num_rows($result) ==1) {
                    $row = mysqli_fetch_array($result);
                    $direccion = $row['direccion'];
                }
            }
        ?>
        <div class="d-flex flex-column align-items-center ">
            <form action="updateuser.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <div class="form-group">
                <label>Dirección</label>
                <input type="text" name="direccion" value="<?php print $direccion;?>"
                class="form-control" placeholder="Actualizar teléfono">
            </div>
            <button class="btn btn-success" name="updatedir">Actualizar</button>
            </form>
        </div>
    </div>
  </header>

  <!-- Footer -->
  <?php
   include "footer.php"
  ?>

</body>

</html>
                