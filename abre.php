<?php 
    $conexion = new mysqli("sql210.infinityfree.com", "if0_38265002", "x6dvCsTXuoY", "if0_38265002_Cine");

    if ($conexion->connect_error) {
        echo "Algo salió mal: " . $conexion->connect_error;
        // $conexion->connect_error para comprobar si hubo un
        // error en la conexión. Si la propiedad contiene un valor, significa que hubo un error.
    } else {
        echo "La gestión fue exitosa";
    }
?>