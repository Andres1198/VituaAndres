<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//require_once '../ruta.php';
//session_start();
$obj = $_SESSION['id_usuario'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vituta</title>
        <link rel="shortcut icon" href="<?= CARPETA_ARCHIVOS?>Logo.ico" />
    </head>
    <body>
        <form action="<?= INFORMACION_RESERVA_FINAL['url'] ?>" method="POST">
            <label>usted desea reservar el siguiente paquete: </label><br/>
            <label>nombre paquete </label>
            <input type="text" name="nombre_paquete" id="nombre_paquete" value=" <?= $nombre_paquete ?>" readonly="readonly"/><br/>
            <label>precio paquete </label>    
            <input type="text" name="precio_paquete" id="precio_paquete" value="<?= $precio_paquete?>"  readonly="readonly"/><br/>
            <label> seleccione la información requerida para la reserva</label><br/>
            <label for="fecha_reserva">Fecha Reserva:</label>
            <input type="date" id="fecha_reserva" name="fecha_reserva" id="fecha_reserva"/><br/>
            <label for="cantidad_personas">Cantidad Personas:</label>
            <input type="number" id="cantidad_personas" name="cantidad_personas" id="cantidad_personas"/>
            <input type="hidden" id="id_paquete_pre" name="id_paquete_pre" value="<?= $id_paquete?>"/>
            <button onclick="enviarInfoFinal()">Confirmar Informacion</button>
        </form>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        var respuesta="";
    function enviarInfoFinal(idPaquetePre,precioPaquete,nombrePaquete,fechaReserva,cantidadPersonas){
    $.ajax({
       type:'POST',
       async: false,
       data: 'id_paquete_pre='+idPaquetePre,'precio_paquete='+precioPaquete,'nombre_paquete='+nombrePaquete,'fecha_reserva='+fechaReserva,'cantidad_personas='+cantidadPersonas,
       url: '<?= INFORMACION_RESERVA_FINAL['url'] ?>',
       success: function (data) {
           respuesta=JSON.parse(data);
       }
    });
    alert(respuesta);
    }
    </script>
    
</html>
