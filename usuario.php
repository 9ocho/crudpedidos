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
    include("navegacion.php");
  ?>

  <!-- Masthead -->
  <header class="masthead bg-ligth text-dark text-center">
      

      <!-- Masthead Heading -->
      <h2>Perfil de cliente</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-dark">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
      
      <h2 class="text-uppercase text-secondary">Datos personales</h2>
    <div class="container w-25 text-center d-flex flex-column align-items-center">
        <div class="row">
    <?php
        require "conexion.php";
        session_start();
        $user = $_SESSION['iduser'];
            $sql = "SELECT user, email, telefono, direccion
                    FROM usuarios WHERE iduser= $user";
                $query=mysqli_query($conexion,$sql);
            $row = mysqli_fetch_array($query);?>
            <div class="col-12 mb-3">         
                <h6>Nombre <a href="upnombre.php?id=<?php echo $user?>"><i class="text-dark fas fa-edit"></i></a></h6>
                <input readonly type="text" class="form-control" value="<?php echo $row['user']?>">
            </div>
            <div class="col-12 mb-3">         
                <h6>Teléfono <a href="uptel.php?id=<?php echo $user?>"><i class="text-dark fas fa-edit"></i></a></h6>
                <input readonly type="text" class="form-control" value="<?php echo $row['telefono']?>">
            </div>
            <div class=" col-12 mb-3">            
                <h6>Dirección <a href="updir.php?id=<?php echo $user?>"><i class="text-dark fas fa-edit"></i></a></h6>    
                <input readonly type="text" class="form-control" value="<?php echo $row['direccion']?>">
            </div>
            <div class=" col-12 mb-3">         
                <h6>Email</h6>
                <input readonly type="text" class="form-control" value="<?php echo $row['email']?>">
            </div>
            <div class="offset-3 ">
                <a href="pedidosc.php"><button class="btn btn-dark btn-lg mt-5">MIS PEDIDOS</button></a>
            </div>
        </div>
    </div>
  </header>
  <!-- Footer -->
  <?php
    include "footer.php"
  ?>
</body>

</html>
