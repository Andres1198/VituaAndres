<!DOCTYPE html>
<?php //laura proyecto?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vituta</title>
        <link rel="shortcut icon" href="<?= CARPETA_ARCHIVOS ?>Logo.ico" />

        <link href="<?= CARPETA_RECURSOS ?>fonts/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?= CARPETA_RECURSOS ?>css/estiloMenu_1.css" rel="stylesheet" type="text/css"/>
        <script src=<?= CARPETA_RECURSOS ?>"js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <link href="<?= CARPETA_RECURSOS ?>css/EstiloLogo.css" rel="stylesheet" type="text/css"/>

    <body>
         
        <header>
            <img src="../archivos/Logo.png" alt=""/>
            <div class="contenedor">
                <div class="vituta">
                   
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
        <!--
        <div id="menu">
            <div id="seleccion">
                <ul class="button" >
                    <li><a href="<?= RUTA_PRINCIPAL['url'] ?>">Inicio</a></li>
                    // <li><a href="<?= MOSTRAR_PREDETERMINADO['url'] ?>">Registrar paquete predeterminado(Admin)</a></li>
                     <li><a href="<?= CONSULTAR_PREDETERMINADO['url'] ?>">Consultar Paquetes (Usuario)</a></li>
                    //<li><a href="<?= AJAX_PREDETERMINADO['url'] ?>">Gestion paquete Predeterminado(Admin)</a></li>
                    <li><a href="<?= INICIO_SESION['url'] ?>">Iniciar Sesión</a></li>
                    //<li><a href="<?= MODIFICAR_VISTA['url'] ?>">Modificar Usuario</a></li>
                    //<li><a href="<?= REGISTRAR_ACTIVIDAD['url'] ?>">Registrar Actividad</a></li>
                    <li><a href="<?= ACTIVIDAD['url'] ?>">Gestionar Actividad</a></li>
                    //<li><a href="<?= REGISTRAR_LUGAR['url'] ?>">Registrar Lugar</a></li>
                    <li><a href="<?= GESTIONAR_LUGAR['url'] ?>">Gestionar Lugar</a></li>
                    <li><a href="<?= CREAR_RESERVA_PAQUETE_PREDETERMINADO['url'] ?>">Reservar paquete predeterminado</a></li>
                    <li><a href="<?= CONSULTAR_RESERVAS_USUARIO['url'] ?>">Consulta tus reservas</a></li>
                    <li><a href="<?= CERRAR_SESION['url'] ?>">Cerrar Sesión</a></li>

                </ul>
            </div>



        </div>-->
    </body>
</html>
