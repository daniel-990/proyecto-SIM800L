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

    require './conexion/conexion.php';

    if($conexion){

        if(isset($_GET)){

            $dta = $_GET["datos"];

            //fecha de ingreso
            $time = date("d-m-Y - H:i:s");
            $hoy = getdate();
            ini_set('date.timezone','America/Bogota'); 

            $fechaactual = $hoy['mon']." / ".$hoy['mday']." / ".$hoy['year']." / ".date("g:i A");
        
            $sql = "INSERT INTO data ( dato, fecha ) VALUES ('$dta','$fechaactual')";

            if($dta == ""){
                echo "<p>sin datos para mostrar</p>";
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


