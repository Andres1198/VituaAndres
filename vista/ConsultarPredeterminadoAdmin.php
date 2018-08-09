<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Paquete predeterminado</title>
        <script type="text/javascript" src="<?= CARPETA_RECURSOS ?>js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="<?= CARPETA_RECURSOS ?>css/bootstrap.css"></script>
        <script type="text/javascript" src="<?= CARPETA_RECURSOS ?>js/bootstrap.min.js"></script>
        <link href="<?= CARPETA_RECURSOS ?>css/estiloMenu_1.css" rel="stylesheet" type="text/css"/>
        <link href="<?= CARPETA_RECURSOS ?>fonts/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?= CARPETA_RECURSOS ?>css/estilos de tabla.css" rel="stylesheet" type="text/css"/>
        <link href="<?= CARPETA_RECURSOS ?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <div class="contenedor">
                <div class="vituta">
                    <h1>VITUTA</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="<?= RUTA_PRINCIPAL['url'] ?>"><span class="primero"><i class="icon icon-paper-plane"></i></span>Iniciar Sesión</a></li>
                        <li><a href="<?= ACTIVIDAD['url'] ?>"><span class="segundo"><i class="icon icon-suitcase"></i></span>Gestionar Actividad</a></li>
                        <li><a href="<?= GESTIONAR_LUGAR['url'] ?>"><span class="tercero"><i class="icon icon-user"></i></span>Gestionar Lugar</a></li>
                        <li><a href="#"><span class="cuarto"><i class="icon icon-paper-plane"></i></span>Administrador</a>

                            <ul>
                                <li><a href="<?= MOSTRAR_PREDETERMINADO['url'] ?>"><span class="icon icon-suitcase" id="primero"></span>Registrar paquete predeterminado(Admin)</a></li>
                                <li><a href="<?= AJAX_PREDETERMINADO['url'] ?>"><span class="icon icon-suitcase"></span>Gestion paquete Predeterminado(Admin)</a></li>
                                <li><a href="<?= MODIFICAR_VISTA['url'] ?>"><span class="icon icon-user"></span>Modificar Usuario</a></li>
                                <li><a href="<?= REGISTRAR_ACTIVIDAD['url'] ?>"><span class="icon icon-user"></span>Registrar Actividad</a></li>
                                <li><a href="<?= REGISTRAR_LUGAR['url'] ?>"><span class="icon icon-user"></span>Registrar Lugar</a></li>

                            </ul>
                        </li>
                        <li><a href="<?= CERRAR_SESION['url'] ?>"><span class="quinto"><i class="icon icon-user"></i></span>Cerrar Sesión</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div align="center">

            <div class="conteTablas">
                <div id="mensaje" class="alert-success ">Bienvenido</div>
                <div class="bordesPaquetepre">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre paquete</th>
                                <th>Precio Por Persona</th>
                                <th>Modificar</th>
                                <th>Eliminar</th>

                            </tr>
                        </thead>
                        <tbody id="cuerpo">

                        </tbody>
                    </table>
                   

                </div>
                 <input type="button" value="consultar" id="btn" />
            </div>
            <div id="form"class="conpaquepre">
                <input type="hidden" id="id" name="id"/>
                <input type="text" id="nombre"/>
                <input type="text" id="precio"/>

                <input type="button" id="btnModificar" value="Guardar"/>
            </div>
        </div>
    </body>
    <script type="text/javascript">


        var mensaje = $('#mensaje');
        mensaje.hide('slow');
        function consultar() {
            $.ajax({
                'url': '<?= CONSULTAR_PREDETERMINADO_ADMIN['url'] ?>',
                'type': 'POST',
                'data': {},
                success: function (respuesta) {

                    var cuerpo = $('#cuerpo');//tabla-tbody
                    cuerpo.empty();
                    for (var i = 0; i < respuesta.length; i++) {
                        var item = respuesta[i];
                        var fila = "<tr>";
                        fila += "<td>" + item.nombre_paquete + "</td>" + "<td>" + item.precio_persona + "</td>";
                        fila += "<td> <input class='modificar' data-info='" + JSON.stringify(item) + "'  type='button' value='modificar'/></td>";
                        fila += "<td> <input class='btnEliminar' data-id='" + item.id_paquete_predeterminado + "'  type='button' value='eliminar'/></td></tr>";
                        cuerpo.append(fila);
                    }

                    $('tbody input.modificar').on('click', function (e) {
                        var data = $(this).attr('data-info');
                        var persona = JSON.parse(data);
                        $('#nombre').val(persona.nombre_paquete);
                        $('#precio').val(persona.precio_persona);
//                        $('#actividad').val(persona.nombre_actividad);
                        $('#id').val(persona.id_paquete_predeterminado);

                    });
                    $('tbody input.btnEliminar').on('click', function (e) {
                        var id = $(this).attr('data-id');
                        var alert = confirm('¿Desea eliminar la Fila?');
                        if (alert == true) {
                            $.ajax({
                                'url': '<?= ELIMINAR_PREDETERMINADO['url'] ?>',
                                'type': 'POST',
                                'data': {'id': id},
                                success: function (respuesta) {
                                    mensaje.removeClass('alert-success');
                                    mensaje.removeClass('alert-danger');
                                    if (respuesta.codigo === 1) {
                                        mensaje.addClass('alert-success');

                                    } else {
                                        mensaje.addClass('alert-danger');
                                    }
                                    mensaje.show('slow');
                                    mensaje.fadeOut(2000);
                                    mensaje.empty().html(respuesta.mensaje);
                                    consultar();
                                }
                            });
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

        $('#btnModificar').on('click', function (e) {
            var nombre = $('#nombre').val();
            var precio = $('#precio').val();
//            var correo = $('#actividad').val();
            var id = $('#id').val();
            $.ajax({
                'url': '<?= MODIFICAR_PREDETERMINADO['url'] ?>',
                'type': 'POST',
                'data': {'id': id, 'nombre': nombre, 'precio': precio},
                success: function (respuesta) {

                    mensaje.removeClass('alert-success');
                    mensaje.removeClass('alert-danger');
                    if (respuesta.codigo === 1) {
                        mensaje.addClass('alert-success');

                        $("div#form input[type='text'],div#form input[type='hidden']").val('');
                    } else {
                        mensaje.addClass('alert-danger');
                    }
                    mensaje.show('slow');
                    mensaje.fadeOut(2000);
                    mensaje.empty().html(respuesta.mensaje);
                    consultar();
                }

            });
        });

    </script>
</html>
