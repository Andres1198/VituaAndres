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
        <link href="<?= CARPETA_RECURSOS ?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= CARPETA_RECURSOS ?>css/estiloMaquetacion.css" rel="stylesheet" type="text/css"/>
        <link href="<?= CARPETA_RECURSOS ?>css/estiloMenu_1.css" rel="stylesheet" type="text/css"/>
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
        <div class="contenidoRegistroUsu">
            <form name="formulario" method="POST" action="<?= USUARIO_GUARDAR['url'] ?>"  >
                <center><h2>Registro</h2></center>
                <div class="form-group">
                    <label for="usu_nombre">Nombre</label>
                    <input type="text" id="usu_nombre" name="usu_nombre" class="form-control" placeholder="Nombre" />
                </div>  
                <div class="form-group">
                    <label for="usu_apellido">Apellido</label>
                    <input type="text" id="usu_apellido" name="usu_apellido" class="form-control" placeholder="Apellido" />
                </div>
                <div class="form-group">
                    <label for="usu_tipo_documento">Tipo Documento</label>
                    <select name="usu_tipo_documento" id="usu_tipo_documento" class="form-control" >
                        <option >Cedula de ciudadania</option> 
                        <option >Pasaporte</option> 
                        <option>Cedula Extranjeria</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="usu_numero_documento">Numero de Documento</label>
                    <input type="text" id="usu_numero_documento" name="usu_numero_documento" class="form-control" placeholder="Numero documento"/>
                </div>
                <div class="form-group">
                    <label for="usu_genero">Genero</label>
                    <select name="usu_genero" id="usu_genero" required class="form-control">
                        <option>Femenino</option> 
                        <option>Masculino</option> 
                    </select>
                </div>
                <div class="form-group">
                    <label for="usu_telefono">Télefono</label>
                    <input type="number" id="usu_telefono" name="usu_telefono"  min="0" class="form-control" placeholder="Telefono" />
                </div>
                <div class="form-group">
                    <label for="usu_correo">Correo Electronico</label>
                    <input type="email" id="usu_correo" name="usu_correo" class="form-control" placeholder="Correo"/>
                </div>
                <div class="form-group">
                    <label for="usu_correoConfirmacion">Confirmación Correo Electronico</label>
                    <input type="email" id="usu_correoConfirmacion" name="usu_correoConfirmacion" class="form-control" placeholder="Confirmación Correo" />
                </div>
                <div class="form-group">
                    <label for="usu_clave">Clave</label>
                    <input type="password" id="usu_clave" name="usu_clave" class="form-control" placeholder="Clave"/>
                </div>
                <div class="form-group">
                    <label for="usu_claveConfirmacion">Confirmación de clave</label>
                    <input type="password" id="usu_claveConfirmacion" name="usu_claveConfirmacion" class="form-control" placeholder="Confirmación Clave"/>
                </div>
                <center>
                    <div class="Regitro">
                        <input type="submit" id="btn" class="btn btn-primary" name="btn" value="Registrar">
                    </div>
                </center>

            </form>
        </div>
        <script>
            (function () {
                var formulario = document.getElementsByName('formulario')[0],
                        elementos = formulario.elements,
                        boton = document.getElementById('btn');

                var validarNombre = function (e) {
                    if (formulario.usu_nombre.value == 0) {
                        alert("Completa campo nombre");
                        e.preventDefault();

                    }

                }
                var validarApellido = function (e) {
                    if (formulario.usu_apellido.value == 0) {
                        alert("Completa campo Apellido");
                        e.preventDefault();

                    }

                }
                var validarTelefono = function (e) {
                    if (formulario.usu_telefono.value == 0) {
                        alert("Completa campo Telefono");
                        e.preventDefault();

                    }

                }
                var validarNum = function (e) {
                    if (formulario.usu_telefono.value.length >= 11) {
                        alert("Campo telefono valido para 10 caracteres");
                        e.preventDefault();

                    }

                }
                var validarDocumento = function (e) {
                    if (formulario.usu_numero_documento.value == 0) {
                        alert("Completa campo Documento");
                        e.preventDefault();

                    }

                }
                var validarNumDocumento = function (e) {
                    if (formulario.usu_numero_documento.value.length >= 11) {
                        alert("Campo Numero Documento valido para 10 caracteres");
                        e.preventDefault();

                    }

                }
                var validarCorreo = function (e) {
                    if (formulario.usu_correo.value == 0) {
                        alert("Completa campo Correo");
                        e.preventDefault();
                    }


                }
                var validarClave = function (e) {
                    if (formulario.usu_correo.value == 0) {
                        alert("Completa campo Clave");
                        e.preventDefault();

                    }

                }

                var validarIgualCorreo = function (e) {
                    if (formulario.usu_correoConfirmacion.value != formulario.usu_correo.value) {
                        alert("Los correo no coinciden");
                        e.preventDefault();

                    }
                }
                var validarIgualCLave = function (e) {
                    if (formulario.usu_claveConfirmacion.value != formulario.usu_clave.value) {
                        alert("Las claves no coinciden");
                        e.preventDefault();

                    }
                }



                var validar = function (e) {
                    validarNombre(e);
                    validarApellido(e);
                    validarTelefono(e);
                    validarDocumento(e);
                    validarCorreo(e);
                    validarClave(e);
                    validarIgualCorreo(e);
                    validarIgualCLave(e);
                    validarNum(e);
                    validarNumDocumento(e);
                }

                formulario.addEventListener("submit", validar);
            }())
        </script>
    </body>
</html>

<!--//            $('#formulario').on('submit', function (e) {
//                e.preventDefault();//Deteniendo el formulario
//                var mensaje = $('#mensaje');
//                var nombre = $('#usu_nombre').val();
//                if(nombre===''){
//                    mensaje.html('Debe ingresar el nombre');
//                    return;//Finalizar el método
//                }
//                 var apellido =$('#usu_apellido').val();
//                if(apellido===''){
//                    mensaje.html('Debe ingresar el apellido');
//                    return;
//                }
//               
//                 var documento =$('#usu_numero_documento').val();
//                if(documento===''){
//                    mensaje.html('Debe ingresar el numero de documento');
//                    return;
//                }
//                if ( documento.length >=10) {
//                    mensaje.html('El numero de documento debe tener un maximo de 10 caracteres');
//                    return;
//                    }
//                var genero = $('#usu_genero').val();
//                if(genero===''){
//                    mensaje.html('Debe ingresar el genero');
//                    return;//Finalizar el método
//                }
//                 var telefono =$('#usu_telefono').val();
//                if(telefono===''){
//                    mensaje.html('Debe ingresar el telefono');
//                    return;
//                }
//                if ( telefono.length >=10) {
//                    mensaje.html('El télefono debe tener un maximo de 10 caracteres');
//                    return;
//                    }
//                
//                var correo = $('#usu_correo').val();
//                if(correo===''){
//                    mensaje.html('Debe ingresar el correo');
//                    return;//Finalizar el método
//                }
//                 var confiCorreo =$('#usu_correoConfirmacion').val();
//                if(confiCorreo===''){
//                    mensaje.html('Debe ingresar la confirmación de correo');
//                    return;
//                }
//                 var clave =$('#usu_clave').val();
//                if(clave===''){
//                    mensaje.html('Debe ingresar la clave');
//                    return;
//                }
//                 var confiClave =$('#usu_claveConfirmacion').val();
//                if(confiClave===''){
//                    mensaje.html('Debe ingresar la confirmación de clave ');
//                    return;
//                }
//                
//                if(clave != confiClave){
//                    mensaje.html('Las contraseñas no coinciden');
//                    return;
//                }
//                if(correo != confiCorreo){
//                    mensaje.html('Los correos no coinciden');
//                    return;
//                }
////             $('#btn').on('click', function (e) {
////             $.ajax({
////                    'url': '',
////                    'type': 'POST',
////                    'data': {
////                        'nombre':  $('#usu_nombre').val(),
////                        
////                        'apellido':  $('#usu_apellido').val(),
////                        
////                        'tipoDoc':  $('#usu_tipo_documento').val(),
////                        
////                        'numDoc':  $('#usu_numero_documento').val(),
////                        
////                        'genero':  $('#usu_genero').val(),
////                        
////                        'telefono':  $('#usu_telefono').val(),
////                        
////                        'correo':  $('#usu_correo').val(),
////                        
////                        'confiCorreo':  $('#usu_confirmacion_correo').val(),
////                        
////                        'clave':  $('#usu_clave').val(),
////                        
////                        'confiClave':  $('#usu_confirmacion_clave').val()
////        
////                        
////                    },
////                    success: function (respuesta) {
////                   
////                    }
////                });
////                
////            });
//            });-->

