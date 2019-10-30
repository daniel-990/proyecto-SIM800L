<?php 
    require './constantes/constantes.php';

    // conexiones a la base de datos
    $servidor = SERVIDOR;
    $usuario = USUARIO;
    $password = PASSWORD;
    $basededatos = BASEDEDATOS;

    $conexion = new mysqli($servidor, $usuario, $password, $basededatos);


    if ($conexion->connect_errno) {
        echo "Lo sentimos, este sitio web está experimentando problemas.";
    
        echo "Error: Fallo al conectarse a MySQL debido a: \n";
        echo "Errno: " . $conexion->connect_errno . "\n";
        echo "Error: " . $conexion->connect_error . "\n";
        
        exit;
    }


?>