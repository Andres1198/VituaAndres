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
        <link href="<?= CARPETA_RECURSOS?>css/EstiloRecuperacion.css" rel="stylesheet" type="text/css"/>
        <link href="<?= CARPETA_RECURSOS?>css/estiloMenu_1.css" rel="stylesheet" type="text/css"/>
        <link href="<?= CARPETA_RECURSOS?>fonts/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?= CARPETA_RECURSOS?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="<?=CARPETA_RECURSOS?>js/jquery-3.3.1.min.js" type="text/javascript"></script>
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
                        <li><a href="<?=CONSULTAR_RESERVAS_USUARIO['url'] ?>"><span class="tercero"><i class="icon icon-user"></i></span>Consulta de reservas</a></li>
                        <li><a href="<?= CREAR_RESERVA_PAQUETE_PREDETERMINADO['url'] ?>"><span class="cuarto"><i class="icon icon-user"></i></span>Reserva ya </a></li>
                        <li><a href="<?= RUTA_PRINCIPAL['url'] ?>"><span class="quinto"><i class="icon icon-user"></i></span>Iniciar Sesión</a></li>
                        <li><a href="<?= RUTA_PRINCIPAL['url'] ?>"><span class="sexto"><i class="icon icon-user"></i></span>Cerrar Sesión</a></li>
                        
                       
                    </ul>
                </nav>
            </div>
        </header>
    <center>
        <div class="contenedor1">
           
            <form method="POST" action="<?= ENVIAR_CORREO['url'] ?>" >
                 <div class="titulo"> <h2>Recuperar Contraseña </h2></div>
                <div class="form-group">
                    <label for="usu_olvidoClave">Ingresa tu correo electronico</label>
                    <input type="email" name="usu_olvidoClave" class="form-control" id="usu_olvidoClave">
                </div>
                <input type="submit" class="btn btn-primary" id="btn" data-url="<?= INICIO_SESION['url'] ?>">
            </form>
        </div>
    </center> 
    <script>
        (function () {

            function alerta(e) {
                alert("Correo enviado");

            }


            addEventListener("submit", alerta);
        }())
    </script>
</body>
</html>
