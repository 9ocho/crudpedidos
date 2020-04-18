<?php
include("conexion.php");
if (isset($_POST['updatenombre'])){
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $query = "UPDATE usuarios SET user = '$nombre' WHERE iduser = $id";
    $result = mysqli_query($conexion,$query);
    if (!$result){
        echo "El query de actualizar falló";
    }else{
        ?>
        <script>
        window.location = "usuario.php";
        </script>
        <?php 
    }
}

if (isset($_POST['updatetelefono'])){
    $id = $_GET['id'];
    $telefono = $_POST['telefono'];
    $query = "UPDATE usuarios SET telefono = '$telefono' WHERE iduser = $id";
    $result = mysqli_query($conexion,$query);
    if (!$result){
        echo "El query de actualizar falló";
    }else{
        ?>
        <script>
        window.location = "usuario.php";
        </script>
        <?php 
    }
}
if (isset($_POST['updatedir'])){
    $id = $_GET['id'];
    $direccion = $_POST['direccion'];
    $query = "UPDATE usuarios SET direccion = '$direccion' WHERE iduser = $id";
    $result = mysqli_query($conexion,$query);
    if (!$result){
        echo "El query de actualizar falló";
    }else{
        ?>
        <script>
        window.location = "usuario.php";
        </script>
        <?php 
    }
}
?>