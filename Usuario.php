
<?php
//session_start();
//$varsesion = $_SESSION['usuario'];
//if($varsesion == null || $varsesion = ''){
//    echo'Usted no puede ingresar';
//    die();
//}
//
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/estilosPaginas.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/estiloMaquetacion.css" rel="stylesheet" type="text/css"/>





        <title></title>

    </head>
    <body>
        <h1>Bienvenido ANDRES</h1>
        <div class="contenidoInicio">
            <div class="datagrid">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Correo</th>
                            <th>Clave</th>
                        </tr>
                    </thead>
                    <?php
                    $conexion = new PDO("mysql:host=den1.mysql2.gear.host;dbname=vituta17", "vituta17", "Qk0B~o08?puZ");
                    $consulta2 = ("select * from usuario");
                    $consulta = $conexion->prepare($consulta2);
                    $consulta->execute();
                    $resultado = $consulta;


                    foreach ($resultado as $obj) {
                        ?>

                        <tbody id="cuerpo">
                            <tr class="alt">
                                <td><?php echo $obj['correo']; ?></td>
                                <td><?php echo $obj['clave']; ?></td>

                            </tr>

                        </tbody>
                    <?php } ?>
                </table>
            </div>
            <br>
            <center>
                <a href="Cerrarsesion.php"><button id="color"class="btn btn-primary">Cerrar sesion</button></a>
            </center>
        </div>
    </body>
</html>
