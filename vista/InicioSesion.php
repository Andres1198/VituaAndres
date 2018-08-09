<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--><?php
session_abort();
session_start();
if (isset($_SESSION['rol'])) {
    if ($_SESSION['rol'] == 'usuario') {
        include_once './vista/MenuVitutaUsuario.php';
        return;
    } else if ($_SESSION['rol'] == 'administrador') {
        include_once './vista/MenuVitutaAdministrador.php';
        return;
    }
} else {
    ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Vituta</title>
            <link rel="shortcut icon" href="<?= CARPETA_ARCHIVOS ?>Logo.ico" />
            <link href="<?= CARPETA_RECURSOS ?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
            <link href="<?= CARPETA_RECURSOS ?>css/estiloMaquetacion.css" rel="stylesheet" type="text/css"/>
            <link href="<?= CARPETA_RECURSOS ?>fonts/style.css" rel="stylesheet" type="text/css"/>
            <link href="<?= CARPETA_RECURSOS ?>css/estiloMenu_1.css" rel="stylesheet" type="text/css"/>
            
        </head>
        <body>
            
       
            <div class="contenidoInicio">
                <form class="login" action="<?= USUARIO_AUTENTICAR['url'] ?>" method="POST">
                    <center><h2 class="login-title">Iniciar Sesión</h2></center>
                    <div class="form-group">
                        <label for="usu_correo">Ingrese Correo</label>
                        <input type="email" name="usu_correo" class="form-control" id="usu_correo" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="usu_clave">Ingrese Contraseña</label>
                        <input type="password" name="usu_clave" class="form-control" id="usu_clave" placeholder="Contraseña">
                    </div>
                    <center> 
                        <input type="submit" value="iniciar sesion" class="btn btn-primary"/>
                        <!--<div class="finInicio">  <button type="button" class="btn btn-primary   ">Iniciar Sesíon</button>--> 
                            <p class="login-lost"><a href="<?= OLVIDO_CLAVE['url'] ?>">Olvidaste tu contraseña</a></p>
                            <p class="login-lost"><a href="<?= USUARIO_REGISTRAR['url'] ?>">Registrarse</a></p> 
                        </div>
                    </center>
                </form>
            </div>
            
        </body>
    </html>
    <?php
}
?>