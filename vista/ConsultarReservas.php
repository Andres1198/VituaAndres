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
        <form >
            <table>
                <tr>
                    <td>Nombre Paquete reservado</td>
                    <td>Fecha Seleccionada</td>
                    <td>Cantidad de personas</td>
                    <td>Valor Final</td>
                </tr>
                <?php foreach ($listaCreado as $valorCreado) { ?>
                    <tr>
                        <td> <?= $valorCreado->nombre_creado ?>  </td>
                        <td> <?= $valorCreado->fecha_servicio ?> </td>
                        <td> <?= $valorCreado->cantidad_personas ?> </td>
                        <td> <?= $valorCreado->valor_total ?> </td>
                        <td> <button onclick="eliminarReservaCreado(<?= $valorCreado->id_reserva_creado ?>)">Cancelar Reserva</button> </td>
                    </tr>

                <?php } ?>
                <?php foreach ($listaPredeterminado as $valorPredeterminado) { ?>
                    <tr>
                        <td>  <?= $valorPredeterminado->nombre_paquete ?>   </td>
                        <td> <?= $valorPredeterminado->fecha_servicio ?> </td>
                        <td> <?= $valorPredeterminado->cantidad_personas ?> </td>
                        <td> <?= $valorPredeterminado->valor_total ?> </td>
                        <td> <button onclick="eliminarReservaPredetermindo(<?= $valorPredeterminado->id_reserva_predeterminado ?>)">Cancelar Reserva</button> </td>
                    </tr>

                <?php } ?>
            </table>


        </form>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        var respuesta="";
    function eliminarReservaCreado(idReserva){
    $.ajax({
       type:'POST',
       async: false,
       data: 'id_reserva='+idReserva,
       url: '<?=CAMBIAR_ESTADO_RESERVA_CREADO['url']?>?',
       success: function (data) {
           alert(data);
           //respuesta=JSON.parse(data);
       }
    });
    //alert(respuesta);
    }
    
    function eliminarReservaPredetermindo(idReserva){
    $.ajax({
       type:'POST',
       async: false,
       data: 'id_reserva='+idReserva,
       url: '<?=CAMBIAR_ESTADO_RESERVA_PREDETERMINADO['url']?>?',
       success: function (data) {
           alert("asdas");
           respuesta=JSON.parse(data);
       }
    });
    alert(respuesta);
    }    
    </script>
    
    
</html>
