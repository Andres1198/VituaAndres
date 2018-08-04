<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <div class="contenidoInicio">
            <form class="login" action="Validar.php" method="POST">
                <center><h2 class="login-title">Iniciar Sesión</h2></center>
                <div class="form-group">
                    <label for="correo">Ingrese Correo</label>
                    <input type="email" name="correo" class="form-control" id="correo" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="clave">Ingrese Contraseña</label>
                    <input type="password" name="clave" class="form-control" id="clave" placeholder="Contraseña">
                </div>
                <center>
                    <input type="submit" value="Iniciar sesion" class="btn btn-primary">
                    <p class="login-lost"><a href="#">Olvidaste tu contraseña</a></p>
                    <p class="login-lost"><a href="#">Registrarse</a></p> 
                </center>
        </div>
        

    </form>
</div>

</body>
</html>
