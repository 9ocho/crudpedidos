<?php
require "../conexion.php";

session_start();
$idpan = $_REQUEST["pan"];
$idsalsa = $_REQUEST["salsa"];
$iding = $_REQUEST["ing"];
$preciof= $_REQUEST['preciof'];
$user = $_SESSION['iduser'];

$insertped= "INSERT INTO `pedido` (`iduser`, `idpan`,  `idsalsa`, `idingrediente`,`preciof`) VALUES ('$user','$idpan','$idsalsa','$iding','$preciof');";
$resultado= mysqli_query($conexion,$insertped);
?>
<script>
    window.location= "pedido.php?precio="+"<?php echo $preciof?>";
</script>