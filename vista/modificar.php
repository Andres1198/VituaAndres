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
        <link href="<?= CARPETA_RECURSOS ?>css/estiloMaquetacion.css" rel="stylesheet" type="text/css"/>
        <link href="<?= CARPETA_RECURSOS ?>css/estiloMenu_1.css" rel="stylesheet" type="text/css"/>
        <link href="<?= CARPETA_RECURSOS ?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= CARPETA_RECURSOS ?>fonts/style.css" rel="stylesheet" type="text/css"/>

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
        <div class="contenidoInicio">
            <?php $usuario = $_SESSION['usuario'] ?>
            <form method="POST" action="<?= MODIFICAR_USUARIO['url'] ?>">
                <center><h2>Modificar Usuario</h2></center>
                <div class="form-group">                
                    <label for="usu_nombre">Nombre:</label>
                    <input type="text" class="form-control" name="usu_nombre" value="<?= $usuario->getNombre() ?>" >
                </div>
                <div class="form-group">
                    <label for="usu_apellido">Apellido:</label>
                    <input type="text" class="form-control"name="usu_apellido" value="<?= $usuario->getApellido() ?>" >
                </div>
                <center>
                    <input type="submit" class="btn bg-primary">       
                </center>
            </form>
        </div>
    </body>
</html>
