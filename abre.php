<?php 
    $conexion = new mysqli("localhost", "4585640_cines", "Chil3,Relleno65", "4585640_cines");

    if ($conexion->connect_error) {
        echo "Algo salió mal: " . $conexion->connect_error;
        // $conexion->connect_error para comprobar si hubo un
        // error en la conexión. Si la propiedad contiene un valor, significa que hubo un error.
    } else {
        echo "La gestión fue exitosa";
    }
?>