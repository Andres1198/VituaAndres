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
        <link rel="shortcut icon" href="<?= CARPETA_ARCHIVOS?>Logo.ico" />

    </head>
    <body>
        <form action="<?= DETALLES_PAQUETE['url'] ?>" method="POST">
            <table border="1">
                <thead>

                <th>Nombre Paquete</th>
                <th>Precio del paquete</th>
                <th>Ver detalles</th>
                

                </thead>
                <tbody>
                    <?php foreach ($lista as $obj) { ?>
                        <tr>
                            <td><?= $obj->nombre_paquete ?></td>
                            <td><?= $obj->precio_persona ?></td>
                            <td><input type="submit"  name="detalles" value="<?= $obj->id_paquete_predeterminado ?>"></td>


                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            
            <input type="button" onclick="history.back()" name="volver atrás" value="Volver atrás">

        </form>
    </body>
    <script type="text/javascript">
        function mandarId(id) {
            alert(id);
        }
//    $('button.btn.btn-success').on('click', function () {
//        var id = $(this).attr('data-id');
//        var url = $(this).attr('data-url');
//        $.ajax({
//           url :url,
//           type:'POST',
//           data:{'id':id},
//           success:function(r){
//               console.log(r);
//           }
//        });
//    });
    </script>
</html>
