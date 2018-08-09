<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vituta</title>
        <link rel="shortcut icon" href="<?= CARPETA_ARCHIVOS?>Logo.ico" />
    </head>
    <body>
       <form action="<?= RESERVA_PAQUETE_CREADO['url'] ?>" method="POST">
            <input type="text" value="<?php print_r(RESERVA['url'])?>"/>
            <label>Usted desea reservar el siguiente paquete: </label><br/>
            <label>nombre paquete </label>
            <input type="text" name="paq_nombre" id="paq_nombre" value=" <?php print_r($_GET['nom_paq']) ?>"/><br/>
            <label>precio paquete </label>    
            <input type="text" name="val_paq" id="val_paq" value=" <?php print_r($_GET['pre_paq']) ?>"/><br/>
            <label for="fecha_reserva">Fecha Reserva:</label>
            <input type="date" name="fecha_reserva" id="fecha_reserva"/><br/>
            <label for="cantidad_personas">Cantidad Personas:</label>
            <input type="number" name="cantidad_personas" id="cantidad_personas">
            <button >Reservar</button>
        </form>
    </body>
</html>
