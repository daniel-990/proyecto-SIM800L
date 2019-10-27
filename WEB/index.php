<?php
/**
    Guia AT

    conexion con el servicio del proveedor a internet

    AT+SAPBR=3,1,"APN","NOMBRE DEL APN"
    AT+SAPBR=1,1
    AT+SAPBR=2,1 -> solo si vamos a crear un servidor con nuestro Sim800L y guardar archivos html en el (opcional)

    conexion con nuestro servidor local -> xammp

    AT+HTTPINIT
    AT+HTTPPARA="CID", 1
    AT+HTTPPARA="URL","http://192.168.1.7/SIM800-PHP-Testserver/index.php"
    AT+HTTPACTION=0 -> tipo de peticion 0 es get
    AT+HTTPREAD
    AT+HTTPTERM

    AT+SAPBR=0,1 -> para cerrar el servicio de comunicacion con mi sim800l

 */

    $timestamp = date("d-m-Y - H:i:s");

    // conexiones a la base de datos
    $servidor = "beokzru4hqmlcmyupvm4-mysql.services.clever-cloud.com";
    $usuario = "uj2tjyozbkc5m5cb";
    $password = "jAiobUlpXAdHtZOTEmho";
    $basededatos = "beokzru4hqmlcmyupvm4";

    $conexion = mysqli_connect($servidor, $usuario, $password, $basededatos);

    if($conexion){

        if(isset($_GET)){

            $dta = $_GET["nombre"];
        
            $sql = "INSERT INTO data ( dato ) VALUES ('$dta')";

            if($dta == ""){
                echo "<h1>sin datos para mostrar</h1>";
            }else{
                if(mysqli_query($conexion, $sql)){
                    echo "cargo SI - ".$dta;
                }else{
                    echo "no cargo ".mysqli_error($conexion);
                }
                mysqli_close($conexion);
            }

        }else{
            echo "cargo NO";
        }
    }else{
        echo "no conecto";
    }
?>


