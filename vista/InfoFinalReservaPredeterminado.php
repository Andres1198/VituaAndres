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
        <form action="<?= RESERVA_INSERTAR['url'] ?>" method="POST">
            <?php
            foreach ($lista as $obj) {
                $valor_guia = $obj->valor_guia;
                $valor_seguro = $obj->valor_seguro;
                $id_valor_seguro = $obj->id_valor_seguro;
                $id_valor_guia = $obj->id_valor_guia;
            }
            ?>
            <h1>Información de reserva</h1>
            Sra. ... Usted desea reservar con la siguiente información:
            <table>
                <tr>
                    <td>Nombre producto </td>
                    <td>Cantidad </td>
                    <td>Valor Unidad</td>
                    <td>Valor Final</td>
                </tr>
                <tr>
                    <td> Paquete <?= $nombre_paquete ?></td>
                    <td><?= $cantidad_personas ?> </td>
                    <td><?= $precio_paquete ?> </td>
                    <td><?= $precio_paquete * $cantidad_personas ?> </td>
                </tr>

                <?php
                $contador = 0;
                $cantidad_guias = 0;
                for ($i = 0; $i < $cantidad_personas; $i++) {
                    $contador = $contador + 1;
                    if ($contador == 5) {
                        $cantidad_guias = $cantidad_guias + 1;
                        $contador = 0;
                    }
                }
                if ($cantidad_personas % 5 != 0) {
                    $cantidad_guias = $cantidad_guias + 1;
                }
                ?>
                <tr>
                    <td>Guias(s)</td>
                    <td><?= $cantidad_guias ?></td>
                    <td><?= $valor_guia ?></td>
                    <td><?= $valor_guia * $cantidad_guias ?></td>
                </tr>
                <tr>
                    <td>Seguro(s)</td>
                    <td><?= $cantidad_personas ?> </td>
                    <td><?= $valor_seguro ?> </td>
                    <td><?= $valor_seguro * $cantidad_personas ?> </td>
                </tr>

                <tr>
                    <td>Precio Final</td>
                    <td>-</td>
                    <td>-</td>
                    <td><?= $valor_total = ($precio_paquete * $cantidad_personas) + ($valor_guia * $cantidad_guias) + ($valor_seguro * $cantidad_personas) ?></td>
                </tr> 
                <tr>
                    <td>Fecha seleccionada</td>
                    <td><?= $fecha_reserva ?> </td>

                </tr>

            </table>
            <input type="hidden" id="id_paquete_pre" name="id_paquete_pre" value="<?= $id_pred_paquete ?>"/>
            <input type="hidden" id="id_valor_guia" name="id_valor_guia" value="<?= $id_valor_guia ?>"/>
            <input type="hidden" id="id_valor_seguro" name="id_valor_seguro" value="<?= $id_valor_seguro ?>"/>
            <input type="hidden" id="fecha_reserva" name="fecha_servicio" value="<?= $fecha_reserva ?>"/>
            <input type="hidden" id="cantidad_guias" name="cantidad_guias" value="<?= $cantidad_guias ?>"/>
            <input type="hidden" id="cantidad_personas" name="cantidad_personas" value="<?= $cantidad_personas ?>"/>
            <input type="hidden" id="valor_total" name="valor_total" value="<?= $valor_total ?>"/>
             <button onclick="generarFacturaFinal()">Confirmar Informacion</button>
        </form>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        var respuesta = "";
        function generarFacturaFinal(idValorGuia,idValorSeguro,idPaqPre,fechaServicio,cantidadGuias,cantidadPersonas,valorTotal) {
            $.ajax({
                type: 'POST',
                async: false,
                data: 'id_valor_guia=' + idValorGuia,'id_valor_seguro=' + idValorSeguro,'id_paquete_pre=' + idPaqPre,'fecha_servicio=' + fechaServicio,'cantidad_guias=' + cantidadGuias,'cantidad_personas=' + cantidadPersonas,'valor_total=' + valorTotal,
                        url: '<?= RESERVA_INSERTAR['url']?>',
                success: function (data) {
                    respuesta = JSON.parse(data);
                }
            });
            alert(respuesta);
        }
    </script>

</html>
