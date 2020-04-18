<?php
    include("conexion.php");
    
    if(isset($_POST["registro"])){
        $nombre = $_POST["nombre"];
        $telefono = $_POST["telefono"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $direccion = $_POST["direccion"];
        $checkemail= mysqli_query($conexion,"SELECT * FROM usuarios WHERE email = '$email'");
        if(mysqli_num_rows($checkemail)>0){
            ?>
            <p style="color:#FF4545">El correo ya está registrado</p>
            <?php
        }else{
            $insertuser= "INSERT INTO `usuarios` (`user`, `contra`, `email`, `telefono`, `idrol`, `direccion`) VALUES ('$nombre', '$password', '$email', '$telefono', 2, '$direccion');";
            $resultado= mysqli_query($conexion,$insertuser);
            if($resultado){
                ?>
                <h4>Registrado exitosamente</h4>
                <?php
            }
        }
    }

    if(isset($_POST["regpan"])){
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $imagen = $_FILES['imagen']['name'];;
        
        $insertuser= "INSERT INTO `panes` (`nombre_p`, `precio_p`, `img_p`) VALUES ('$nombre', '$precio', '$imagen');";
        $resultado= mysqli_query($conexion,$insertuser);
        if($resultado){
            ?>
            <h4>Registrado exitosamente</h4>
            <?php
        }
        $directorio= "../imagenes/";
        $archivo= $directorio.basename($_FILES["imagen"]["name"]);
        move_uploaded_file($_FILES["imagen"]["tmp_name"], $archivo);
    }

    if(isset($_POST["regingre"])){
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $imagen = $_FILES['imagen']['name'];;
        
        $insertuser= "INSERT INTO `ingredientes` (`nombre_i`, `precio_i`, `img_i`) VALUES ('$nombre', '$precio', '$imagen');";
        $resultado= mysqli_query($conexion,$insertuser);
        if($resultado){
            ?>
            <h4>Registrado exitosamente</h4>
            <?php
        }
        $directorio= "../imagenes/";
        $archivo= $directorio.basename($_FILES["imagen"]["name"]);
        move_uploaded_file($_FILES["imagen"]["tmp_name"], $archivo);
    }

    if(isset($_POST["regsalsa"])){
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $imagen = $_FILES['imagen']['name'];;
        
        $insertuser= "INSERT INTO `salsas` (`nombre_s`, `precio_s`, `img_s`) VALUES ('$nombre', '$precio', '$imagen');";
        $resultado= mysqli_query($conexion,$insertuser);
        if($resultado){
            ?>
            <h4>Registrado exitosamente</h4>
            <?php
        }
        $directorio= "../imagenes/";
        $archivo= $directorio.basename($_FILES["imagen"]["name"]);
        move_uploaded_file($_FILES["imagen"]["tmp_name"], $archivo);
    }
?>