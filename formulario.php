<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/estiloMaquetacion.css" rel="stylesheet" type="text/css"/>

<div class="contenidoRegistroUsu">
            <form  name="formulario" method="POST" action="<?= USUARIO_GUARDAR['url'] ?>"  >

                <center><h2>Registro</h2></center>
                <div class="form-group">
                    <label for="usu_nombre">Nombre</label>
                    <input type="text" id="usu_nombre" name="usu_nombre" class="form-control" placeholder="Nombre" />
                </div>  
                <div class="form-group">
                    <label for="usu_apellido">Apellido</label>
                    <input type="text" id="usu_apellido" name="usu_apellido" class="form-control" placeholder="Apellido" />
                </div>
               
                <center><button class="btn btn-primary" type="submit">Registrarse</button>

            </form>
        </div> 