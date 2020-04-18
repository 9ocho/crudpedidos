<!DOCTYPE html>
<html lang="es">

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
      
      <h2 class="text-uppercase text-secondary">Panes</h2>
    <div class="container text-center">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require("../conexion.php");
                $query = "SELECT * FROM panes";
                $result_alumnos = mysqli_query($conexion, $query);

                while($row = mysqli_fetch_array($result_alumnos)){?>
                    <tr>
                        <td><?php echo $row['id_p']?></td>
                        <td><?php echo $row['nombre_p']?></td>
                        <td><?php echo $row['precio_p']?></td>
                        <td>
                            <a href="updatepan.php?id=<?php echo $row['id_p']?>">
                            <button type="button" class="btn btn-warning" name="update">Modificar</button>
                            <a href="delete.php?idpan=<?php echo $row['id_p']?>">
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </a>
                        </td>
                    </tr>
                <?php } ?>
                
            </tbody>
        </table>
    </div>
  </header>

  <!-- Footer -->
  <?php
    include "../footer.php"
  ?>

</body>

</html>