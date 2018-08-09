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
        <div class="ContRegistraLug">
            <form action="<?= REGISTRAR_LUGAR_GUARDAR['url'] ?>" method="POST">
                <center><h2>Regitrar Lugares</h2></center>
                <div class="form-group">
                    <label for="nombreLugar">Nombre de lugar:</label>
                    <input type="text" name="nombreLugar" id="nombreLugar" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="distancia">Distancia desde casco urbano:</label>
                    <input type="text" name="distancia" id="distancia" class="form-control">
                </div>
                <div class="form-group">
                    <label for="ubicacion">Ubicacion:</label>
                    <input type="text" name="ubicacion" id="ubicacion" class="form-control">
                </div>
                <div class="form-group">
                    <label for="altura">Altura sobre el nivel del mar:</label>
                    <input type="text" name="altura" id="altura" class="form-control">
                </div>

                <div class="form-group">
                    <label>Actividad que se desarrolla en el lugar:</label>
                    <select name="actividad" class="form-control">
                        <?php foreach ($datos as $obj) { ?>
                            <option value="<?= $obj->id_actividad ?>"><?= $obj->nombre_actividad ?></option>
                        <?php } ?>
                    </select></br>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <div class="textos"> 
                        <textarea name="descripcion" class="form-control" rows="3"></textarea></br>
                    </div>
                </div>
                <center>
                    <input type="submit" value="Registrar Lugar" class="btn btn-primary">
                </center>
            </form>
        </div>
    </body>
</html>
