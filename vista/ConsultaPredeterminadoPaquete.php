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
        <link rel="shortcut icon" href="<?= CARPETA_ARCHIVOS ?>Logo.ico" />
      
        <link href="<?=CARPETA_RECURSOS ?>css/estiloMenu_1.css" rel="stylesheet" type="text/css"/>
        <link href="<?=CARPETA_RECURSOS ?>fonts/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?=CARPETA_RECURSOS ?>css/estilos de tabla.css" rel="stylesheet" type="text/css"/>
          <link href="<?=CARPETA_RECURSOS ?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
          <link href="<?=CARPETA_RECURSOS?>css/estiloBordepaquetePrede.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
      <header>
            <div class="contenedor">
                <div class="vituta">
                    <h1>VITUTA</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="<?= RUTA_PRINCIPAL['url'] ?>"><span class="primero"><i class="icon icon-paper-plane"></i></span>Inicio</a></li>
                        <li><a href="<?= CONSULTAR_PREDETERMINADO['url'] ?>"><span class="segundo"><i class="icon icon-suitcase"></i></span>Consultar paquetes</a></li>
                        <li><a href="<?= CONSULTAR_RESERVAS_USUARIO['url'] ?>"><span class="tercero"><i class="icon icon-user"></i></span>Consulta de reservas</a></li>
                        <li><a href=""><span class="cuarto"><i class="icon icon-user"></i></span>Realiza tu reserva </a>
                              <ul>
                                <li><a href="<?= CREA_TU_PAQUETE_INFORMACION['url'] ?>"><span class="icon icon-suitcase" id="primero"></span>Arma tu paquete</a></li>
                                <li><a href="<?= CREAR_RESERVA_PAQUETE_PREDETERMINADO['url'] ?>"><span class="icon icon-suitcase"></span>Reserva predeterminado</a></li>
                            </ul>
                        </li>
                        <li><a href="<?= RUTA_PRINCIPAL['url'] ?>"><span class="quinto"><i class="icon icon-user"></i></span>Iniciar Sesión</a></li>
                        <li><a href="<?= CERRAR_SESION['url'] ?>"><span class="sexto"><i class="icon icon-user"></i></span>Cerrar Sesión</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="conteTablas">
            <div class="bordes">
                <form action="<?= INFORMACION_RESERVA['url'] ?>" method="POST">
                    <center><h2>Información de Reserva</h2></center>
                    <table class="table table-striped">
                        <thead>
                        <th class="estilosBtnT"><h4><center>Nombre Paquete</h4></th>
                        <th class="estilosBtnT"><h4><center>Precio del paquete</h4></th>
<!--                        <th class="estilosBtnT"><center><h4>Reserva Yá</h4></th>-->

                        </thead>
                        <tbody>
                            <?php foreach ($lista as $obj) { ?>
                                <tr>
                        <td class="hover"><center><?= $obj->nombre_paquete ?></center></td>
                                <td class="hover"><center><?= $obj->precio_persona ?></td>
                                    <input type="hidden" id="id_paquete" name="id_paquete" value="<?= $obj->id_paquete_predeterminado ?>"/>
                                    <input type="hidden" id="nombre_paquete" name="nombre_paquete" value="<?= $obj->nombre_paquete ?>"/>
                                    <input type="hidden" id="precio_paquete" name="precio_paquete" value="<?= $obj->precio_persona ?>"/>
                                    <td><button onclick="informacionReserva()" class="btn btn-success" id="botonInfoReser"><center>Obtener Paquete</center></button></center></td>
                                    </tr>
                                <?php } ?>


                                </tbody>
                                </table>
                                </form>
                                </div>
                                </div>
                                </body>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                <script>
                                                var respuesta = "";
                                                function informacionReserva(idPaquete, nombrePaquete, precioPaquete, ){
                                                $.ajax({
                                                type:'POST',
                                                        async: false,
                                                        data: 'id_paquete=' + idPaquete, 'nombre_paquete=' + nombrePaquete, 'precio_paquete=' + precioPaquete,
                                                        url: '<?= INFORMACION_RESERVA['url'] ?>?',
                                                        success: function (data) {
                                                        respuesta = JSON.parse(data);
                                                        }
                                                });
                                                        alert(r alertespuesta);
                                                }
                                </script>
                                </html>
