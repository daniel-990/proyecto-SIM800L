function getTimeAJAX() {   

    const datos = $.ajax({

        url: 'sim800.php', //indicamos la ruta
            dataType: 'text',//indicamos que es de tipo texto plano
            async: false     //ponemos el parámetro asyn a falso
    }).responseText;

    console.log(datos);
    //actualizamos el div que nos mostrará la hora actual
    document.getElementById("render").innerHTML = datos;
}

//con esta funcion llamamos a la función getTimeAJAX cada segundo para actualizar el div que mostrará la hora
setInterval(getTimeAJAX,1000);