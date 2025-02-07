<?php 
    include("abre.php");
    $ticket = $_POST['ticket'];
    $pelicula = $_POST['pelicula'];

    //aca checa bien el nombre de la bae de datos 
    $consulta = "INSERT INTO taquilla(ticket, pelicula) 
    VALUES ('$ticket', '$pelicula')";
    
//usa la sentencia conexion
    if ($conexion->query($consulta) === TRUE) {
        echo "Registro insertado correctamente";
        header("Location: index.php");
    } else {
        echo "Error: " . $conexion->error;
    }

?>