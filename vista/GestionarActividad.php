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
        <script type="text/javascript" src="<?= CARPETA_RECURSOS ?>js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="<?= CARPETA_RECURSOS ?>css/bootstrap.css"></script>
        <script type="text/javascript" src="<?= CARPETA_RECURSOS ?>js/bootstrap.min.js"></script>
    </head>
    <body>
        <input type="button" value="consultar" id="btn" />
        <table border="1">
            <thead>
                <tr>
                    <th>Nombre Actividad</th>
                    <th>categoria</th>
                    <th>Disponibilidad</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>

                </tr>
            </thead>
            <tbody id="cuerpo">

            </tbody>
        </table>
        </br>
        <div id="form">
            <input type="hidden" id="id" name="id"/>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre"/>
            <label for="categoria">Categoria:</label>
            <input type="text" id="categoria"/>
            <label for="estado">Disponibiidad:</label>
            <select id="disponibilidad">
                <option>--Selecciona--</option>
                <option>Disponible</option>
                <option>Mantenimiento</option>
                <option>Inactivo</option>
            </select>

            <input type="button" id="btnGuardar" value="Guardar"/>
            <a href="<?= REGISTRAR_ACTIVIDAD['url'] ?>"> Registrar Actividad</a>
        </div>
    </body>
    <script type="text/javascript">

        function consultar() {
            $.ajax({
                'url': '<?= ACTIVIDAD_CONSULTAR['url'] ?>',
                'type': 'POST',
                'data': {},
                success: function (respuesta) {
                    var cuerpo = $('#cuerpo');//tabla-tbody
                    cuerpo.empty();
                    for (var i = 0; i < respuesta.length; i++) {
                        var act = respuesta[i];
                        var fila = "<tr>";
                        fila += "<td>" + act.nombre_actividad + "</td>" + "<td>" + act.categoria + "</td>" + "<td>" + act.disponibilidad + "</td>";
                        fila += "<td> <input class='modificar' data-info='" + JSON.stringify(act) + "'  type='button' value='modificar'/></td>";
                        fila += "<td> <input class='btnEliminar' data-id='" + act.id_actividad + "'  type='button' value='eliminar'/></td></tr>";
                        cuerpo.append(fila);
                    }

                    $('tbody input.modificar').on('click', function (e) {
                        var data = $(this).attr('data-info');
                        var datosActividad = JSON.parse(data);
                        $('#nombre').val(datosActividad.nombre_actividad);
                        $('#categoria').val(datosActividad.categoria);
                        $('#disponibilidad').val(datosActividad.disponibilidad);
                        $('#id').val(datosActividad.id_actividad);

                    });
                    $('tbody input.btnEliminar').on('click', function (e) {
                        var id = $(this).attr('data-id');
                        var alert = confirm('¿Desea eliminar la Fila?');
                        if (alert == true) {
                            $.ajax({
                                'url': '<?= ACTIVIDAD_ELIMINAR['url'] ?>',
                                'type': 'POST',
                                'data': {'id': id},
                                success: function (respuesta) {

                               
                                }
                            });
                            consultar();
                        } else {
                            return false;
                        }
                    });

                }
            });
        }
        $('#btn').on('click', function (e) {
            e.preventDefault();//OJO solo funciona en CHROME-FIREFOX-OPERA-SAFARI
            consultar();
        });

        $('#btnGuardar').on('click', function (e) {
            var nombre = $('#nombre').val();
            var categoria = $('#categoria').val();
            var disponibilidad = $('#disponibilidad').val();
            var id = $('#id').val();
            $.ajax({
                'url': '<?= ACTIVIDAD_MODIFICAR['url'] ?>',
                'type': 'POST',
                'data': {'id': id, 'nombre': nombre, 'categoria': categoria, 'disponibilidad': disponibilidad},
                success: function (respuesta) {
                    consultar();
                    
                }

            });
        });

    </script>
</html>
