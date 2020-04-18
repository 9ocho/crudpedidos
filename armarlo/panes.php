<?php
    require("../conexion.php");
    $sql=("SELECT * FROM panes");
    $query=mysqli_query($conexion,$sql);
    $cont= mysqli_num_rows($query);
    //Ingredientes es un array vacio en que se van a guardar todos los dartos de la consulta
    $panes = array();
    while($dato=mysqli_fetch_array($query)) {
        //por cada resultado de la consulta se crea una nueva posicion en el array con todas las columnas y su valor
        $panes[] = array(
            'id'     => $dato['id_p'],
            'nombre' => $dato['nombre_p'],
            'precio' => $dato['precio_p'],
            'img'    => $dato['img_p']
        );
    }
    //Se retorna a la funcion success del ajax con un echo y se pasa de array a formato texto para pdoerlo 
    //transferir al frontend, donde se hace el proceso contrario al recibirlo, osea volverlo una estructura de datos
    //de nuevo 
    echo json_encode($panes);
?>