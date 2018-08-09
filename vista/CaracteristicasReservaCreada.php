<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?= CONFIRMACION_FINAL_RESERVA_CRE['url'] ?>" method="POST">
            <label> Crea el nombre de tu paquete personalizado</label>
            <input type="text" id="nombre_personalizado" name="nombre_personalizado"/>
            <?php
            foreach ($seguroGuia as $obj) {
                $valor_guia = $obj->valor_guia;
                $valor_seguro = $obj->valor_seguro;
                $id_valor_seguro = $obj->id_valor_seguro;
                $id_valor_guia = $obj->id_valor_guia;
            }
            ?>
            <br/>
            <table>
                <tr>
                    <td>Nombre Producto</td>
                    <td>Valor Final </td>
                </tr>
                <?php
                $valor_total = 0;
                $cantidadActividades = 0;
                for ($index = 0; $index < count($actividades); $index++) {

                    foreach ($infoActividades[$index] as $value) {
                        ?>
                        <tr>
                            <td><?= $value->nombre_actividad ?></td>
                            <td><?= $value->valor_actividad ?></td>
                        </tr>
                        <input type="hidden" name="cantidad_actividades<?=$index?>" value="<?= $value->id_actividad ?>"/>
                        <?=
                        $valor_total+= $value->valor_actividad;
                    }
                    $cantidadActividades = $cantidadActividades + 1;
                }
                ?>
                <tr>
                    <td>Valor Seguro /persona</td>
                    <td><?= $valor_seguro ?></td>
                </tr>
                <tr>
                    <td>Valor Guia/persona</td>
                    <td><?= $valor_guia ?></td>
                </tr>
                <tr>
                    <td>PrecioPaquete/persona</td>
                    <td><?= $valor_total + $valor_guia + $valor_seguro ?></td>
                </tr>

            </table>
            <label for="fecha_servicio">Seleccione la fecha que desee:</label>
            <input type="date" name="fecha_servicio" id="fecha_servicio"/><br/>
            <label for="cantidad_personas">Cantidad Personas:</label>
            <input type="number" name="cantidad_personas" id="cantidad_personas"/>
            <input type="hidden" name="id_guia" value="<?= $id_valor_guia ?>"/>
            <input type="hidden" name="id_seguro" value="<?= $id_valor_seguro ?>"/>
            <input type="hidden" name="valor_paquete_persona" value="<?= $valor_total ?>"/>
            <input type="hidden" name="cantidad_actividades" value="<?= $cantidadActividades?>"/>
            <input type="submit" value="Finalizar Reserva"/>
        </form>
    </body>
</html>
