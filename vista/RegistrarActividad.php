
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
                                <li><a href="<?= MOSTRAR_PREDETERMINADO['url'] ?>"><span class="icon icon-suitcase"></span>Registrar paquete predeterminado(Admin)</a></li>
                                <li><a href="<?= AJAX_PREDETERMINADO['url'] ?>"><span class="icon icon-suitcase"></span>Gestion paquete Predeterminado(Admin)</a></li>
                                <li><a href="<?= MODIFICAR_VISTA['url'] ?>"><span class="icon icon-user"></span>Modificar Usuario</a></li>
                                <li><a href="<?= REGISTRAR_ACTIVIDAD['url'] ?>"><span class="icon icon-user"></span>Registrar Actividad</a></li>
                                <li><a href="<?= REGISTRAR_LUGAR['url'] ?>"><span class="icon icon-user"></span>Registrar Lugar</a></li>

                            </ul>
                        </li>
                        <li><a href="<?= CERRAR_SESION['url'] ?>"><span class="quinto"><i class="icon icon-user"></i></span>Cerrar sesión</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="ContRegistrarActivi">

            <form action="<?= REGISTRAR_ACTIVIDAD_GUARDAR['url'] ?>" method="POST">
                <center><h2>Registrar Avtividades</h2></center>
                <div class="form-group">
                    <label for="nombre">Nombre de actividad: </label>
                    <input type="text" name="nombre" class="form-control"></br>
                </div>
                <div class="form-group">
                    <label for="duracion">Duración aproximada: </label>
                    <input type="text" name="duracion" class="form-control"></br>
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria: </label>
                    <select name="categoria" class="form-control"></br>
                        <option>Extrema</option>
                        <option>Deportiva</option>
                        <option>Familiar</option>
                    </select></br>
                </div>

                <div class="form-group">
                    <label for="edad">Edad recomendada: </label>
                    <input type="text" name="edad" class="form-control"></br>
                </div>
                <div class="form-group">
                    <label for="valor">Valor: </label>
                    <input type="number" name="valor" class="form-control"></br>
                </div>

                <div class="form-group">
                    <label for="recomendacion">Recomendaciones: </label>
                    <div class="textos"> 
                        <textarea name="recomendacion" class="form-control" rows="3"></textarea></br>
                    </div>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción: </label>
                    <div class="textos">
                        <textarea  name="descripcion"class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <br>
                <center>
                    <input type="file" name="pro_foto_temp" ><br>
                    <input type="submit" class="btn btn-primary">
                </center>
            </form>
        </div>
    </body>

</html>
