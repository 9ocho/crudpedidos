<?php
    include("../conexion.php");

    if (isset($_POST['updatepan'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $query = "UPDATE panes SET nombre_p = '$nombre', precio_p = '$precio' WHERE id_p = $id";
        $result = mysqli_query($conexion,$query);
        if (!$result){
            echo "El query de actualizar falló";
        }else{
            ?>
            <script>
            window.location = "panes.php";
            </script>
            <?php 
        }
    }

    if (isset($_POST['updatesalsa'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $query = "UPDATE salsas SET nombre_s = '$nombre', precio_s = '$precio' WHERE id_s = $id";
        $result = mysqli_query($conexion,$query);
        if (!$result){
            echo "El query de actualizar falló";
        }else{
            ?>
            <script>
            window.location = "salsas.php";
            </script>
            <?php 
        }
    }

    if (isset($_POST['updateing'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $query = "UPDATE ingredientes SET nombre_i = '$nombre', precio_i = '$precio' WHERE id_i = $id";
        $result = mysqli_query($conexion,$query);
        if (!$result){
            echo "El query de actualizar falló";
        }else{
            ?>
            <script>
            window.location = "ingredientes.php";
            </script>
            <?php 
        }
    }
?>