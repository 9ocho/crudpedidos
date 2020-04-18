<?php
    include("../conexion.php");
    
    if(isset($_GET['idpan'])){
        $id = $_GET['idpan'];
        $query = "DELETE FROM panes WHERE id_p = $id";
        $result = mysqli_query($conexion, $query);
        if(!$result)
        {
            die("El query para eliminar falló");
        }
    ?>
    <script>
        window.location = "panes.php";
    </script>
    <?php 
    }
    
    if(isset($_GET['idsalsa'])){
        $id = $_GET['idsalsa'];
        $query = "DELETE FROM salsas WHERE id_s = $id";
        $result = mysqli_query($conexion, $query);
        if(!$result)
        {
            die("El query para eliminar falló");
        }
    ?>
    <script>
        window.location = "salsas.php";
    </script>
    <?php 
    }
    
    if(isset($_GET['idingrediente'])){
        $id = $_GET['idingrediente'];
        $query = "DELETE FROM ingredientes WHERE id_i = $id";
        $result = mysqli_query($conexion, $query);
        if(!$result)
        {
            die("El query para eliminar falló");
        }
    ?>
    <script>
        window.location = "ingredientes.php";
    </script>
    <?php 
    }
?>