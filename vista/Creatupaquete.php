<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Crea tu paquete</title>

    </head>
    <body>
        <form  action="<?= CREA_TU_PAQUETE['url'] ?>" method="POST" >
            
            <table class="table table-striped">
                <thead>
                <th>Nombre Actividad</th>
                <th>Duracion Aproximada</th>
                <th>Recomendacion</th>
                <th>Categoria</th>
                <th>Descripcion</th>
                <th>Edad Recomendada</th>
                <th>Valor Actividad Por Persona</th>

                </thead>
                <tbody>

                    <?php
                    $contadorActividadesPosicion = 0;
                    $contadorActividades = 0;
                    foreach ($lista as $obj) {
                        ?>
                        <tr>
                            <td><?= $obj->nombre_actividad ?></td>
                            <td><?= $obj->duracion_aproximada ?></td>
                            <td><?= $obj->recomendacion ?></td>
                            <td><?= $obj->categoria ?></td>
                            <td><?= $obj->descripcion ?></td>
                            <td><?= $obj->edad_recomendada ?></td>
                            <td><?= $obj->valor_actividad ?></td>
                            <td><input type="checkbox"  name="actividad_<?= $contadorActividadesPosicion + 1 ?>" id="actividad_<?= $contadorActividadesPosicion + 1 ?>" value="<?= $obj->id_actividad ?>"></td>
                        </tr>
                        <?php
                        if ('actividad_' . $contadorActividadesPosicion) {
                            $contadorActividades = $contadorActividades + 1;
                        }
                        ?>
                        <?php
                        echo $contadorActividadesPosicion = $contadorActividadesPosicion + 1;
                    }
                    ?>
                </tbody>
            </table>
                <input type="submit" value="Crear Reserva" onclick="actividadesSeleccionadas('cantidadActividades')">
            </div>
        </form>
    </body>
    

</html>
