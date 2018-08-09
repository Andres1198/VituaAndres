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
        <link href="<?= CARPETA_RECURSOS ?>css/estiloMenu_1.css" rel="stylesheet" type="text/css"/>
        <link href="<?= CARPETA_RECURSOS ?>fonts/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?= CARPETA_RECURSOS ?>css/estiloMaquetacion.css" rel="stylesheet" type="text/css"/>
        <link href="<?= CARPETA_RECURSOS ?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= CARPETA_RECURSOS ?>css/estilos de tabla.css" rel="stylesheet" type="text/css"/>
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
        <div class="contenidoCrearPa">

            <form action="<?= REGISTRAR_PREDETERMINADO['url'] ?>" name="formulario" method="POST">
                <center><h2>Crear paquete Predeterminado</h2></center>

                <div class="form-group">
                    <label for="paq_nombre_paquete">Nombre Paquete</label><br>
                    <input type="text" class="form-control"name="paq_nombre_paquete" id="paq_nombre_paquete" >
                </div>           
                <div class="form-group">
                    <label for="precio_persona">Precio Persona</label><br>
                    <input type="number" name="paq_precio_persona" class="form-control" id="paq_precio_persona"min="1">
                </div>
                <?php foreach ($lista as $obj) { ?>

                    <div class="form-group">
                        <input type="hidden" class="form-control" value="<?= $obj->id_paquete_predeterminado ?>" name="valor" />
                    </div>
                    <div class="textos">
                        <input type="checkbox" name="check[]" id="check" value="<?= $obj->id_actividad ?>" > <?= $obj->nombre_actividad ?>    <br>
                    </div>
                <?php } ?>
                <div class="botones">
                    <input type="button" onclick="history.back()" name="Volver atrás" class="btn btn-default" value="Volver atrás">
                    <button name="btn" id="btn" class="btn btn-primary" >Insertar Paquete</button>
                    <button name="btn" id="btn"onclick="<?= CONSULTAR_PREDETERMINADO['url'] ?>" class="btn btn-primary" >Consultar Paquetes</button>
                </div>


            </form>
        </div>
    </body>
<!--        <script type="text/javascript">
    $('button.btn.btn-success').on('click', function () {
        var id = $(this).attr('data-id');
        var url = $(this).attr('data-url');
        $.ajax({
           url :url,
           type:'POST',
           data:{'id':id},
           success:function(r){
               console.log(r);
           }
        });
    });
    </script>-->
    <script>


    </script>
</html>