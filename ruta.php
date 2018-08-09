<?php

$proyecto = '/vituta/';
$rutaPrincipal = $proyecto . 'index.php';
define('CARPETA_PRINCIPAL', __DIR__);

define('CARPETA_ARCHIVOS', $proyecto . 'archivos/');
define('CARPETA_RECURSOS', $proyecto . 'vista/');
define('RUTA_PRINCIPAL', $rutaPrincipal);
define('USUARIO_AUTENTICAR', array('url' => $rutaPrincipal . '/usuario/autenticar', 'controlador' => 'UsuarioControlador', 'metodo' => 'autenticar'));
define('USUARIO_REGISTRAR', array('url' => $rutaPrincipal . '/usuario/registrar', 'controlador' => 'UsuarioControlador', 'metodo' => 'indexRegistrar'));
define('USUARIO_GUARDAR', array('url' => $rutaPrincipal . '/usuario/guardar', 'controlador' => 'UsuarioControlador', 'metodo' => 'guardar'));
define('MENU', array('url' => $rutaPrincipal . '/menu', 'controlador' => 'MenuControlador', 'metodo' => 'index'));

define('INICIO_SESION', array('url' => $rutaPrincipal . '/menu/iniciar', 'controlador' => 'UsuarioControlador', 'metodo' => 'indexInicio'));
define('OLVIDO_CLAVE', array('url' => $rutaPrincipal . '/menu/usuario/olvido', 'controlador' => 'UsuarioControlador', 'metodo' => 'indexClave'));
define('ENVIAR_CORREO', array('url' => $rutaPrincipal . '/menu/usuario/recuperar', 'controlador' => 'CorreoControlador', 'metodo' => 'enviarCorreo'));
define('PRUEBA_CORREO', array('url' => $rutaPrincipal . '/menu/prueba', 'controlador' => 'MenuControlador', 'metodo' => 'indexPrueba'));
define('CORREO_RESERVA', array('url' => $rutaPrincipal . '/reserva/final', 'controlador' => 'CorreoControlador', 'metodo' => 'confirmacionReserva'));
define('ENVIAR_CODIGO', array('url' => $rutaPrincipal . '/menu/usuario/codigo', 'controlador' => 'UsuarioControlador', 'metodo' => 'nuevaClave'));

define('MOSTRAR_RESERVA', array('url' => $rutaPrincipal . '/menu/reserva/', 'controlador' => 'ReservaControlador', 'metodo' => 'indexReserva'));
define('CONSULTAR_PREDETERMINADO', array('url' => $rutaPrincipal . '/predeterminado/consultar/pac', 'controlador' => 'PredeterminadoControlador', 'metodo' => 'consultaPredeterminado'));
define('CONSULTAR_PREDETERMINADO_ADMIN', array('url' => $rutaPrincipal . '/predeterminado/admin', 'controlador' => 'RelacionPredeterminadoControlador', 'metodo' => 'indexAdmin'));
define('MOSTRAR_PREDETERMINADO', array('url' => $rutaPrincipal . '/predeterminado/mostrar/paquete', 'controlador' => 'PredeterminadoControlador', 'metodo' => 'indexPredeterminado'));
define('REGISTRAR_PREDETERMINADO', array('url' => $rutaPrincipal . '/predeterminado/insertar/final', 'controlador' => 'PredeterminadoControlador', 'metodo' => 'insertarPaquete'));
define('DETALLES_PAQUETE', array(
    'url' => $rutaPrincipal . '/paquete/detalles',
    'controlador' => 'PredeterminadoControlador',
    'metodo' => 'indexConsultaDetalles'
));
define('MODIFICAR_USUARIO', array(
    'url' => $rutaPrincipal . '/menu/modificar',
    'controlador' => 'UsuarioControlador',
    'metodo' => 'modificarUsuario'
));
define('MODIFICAR_VISTA', array(
    'url' => $rutaPrincipal . '/menu/modificar/vista',
    'controlador' => 'UsuarioControlador',
    'metodo' => 'indexModificar'
));
define('REGISTRAR_ACTIVIDAD', array(
    'url' => $rutaPrincipal . '/menu/actividad',
    'controlador' => 'ActividadControlador',
    'metodo' => 'indexActividad'
));
define('REGISTRAR_ACTIVIDAD_GUARDAR', array(
    'url' => $rutaPrincipal . '/menu/actividad/guardar',
    'controlador' => 'ActividadControlador',
    'metodo' => 'insertarActividad'
));
define('ACTIVIDAD', array(
    'url' => $rutaPrincipal . '/menu/actividad/modificar',
    'controlador' => 'ActividadControlador',
    'metodo' => 'indexModificar'
));
define('ACTIVIDAD_CONSULTAR', array(
    'url' => $rutaPrincipal . '/menu/actividad/modificar/consultar',
    'controlador' => 'ActividadControlador',
    'metodo' => 'consultarAc'
));
define('ACTIVIDAD_MODIFICAR', array(
    'url' => $rutaPrincipal . '/menu/actividad/modificar/modificar',
    'controlador' => 'ActividadControlador',
    'metodo' => 'modificar'
));
define('ACTIVIDAD_ELIMINAR', array(
    'url' => $rutaPrincipal . '/menu/actividad/modificar/eliminar',
    'controlador' => 'ActividadControlador',
    'metodo' => 'eliminarActividad'
));
define('REGISTRAR_LUGAR', array(
    'url' => $rutaPrincipal . '/menu/lugar',
    'controlador' => 'LugarControlador',
    'metodo' => 'indexLugar'
));
define('REGISTRAR_LUGAR_GUARDAR', array(
    'url' => $rutaPrincipal . '/menu/lugar/registrar',
    'controlador' => 'LugarControlador',
    'metodo' => 'insertarLugar'
));
define('GESTIONAR_LUGAR', array(
    'url' => $rutaPrincipal . '/menu/lugar/gestionar',
    'controlador' => 'LugarControlador',
    'metodo' => 'indexGestionarLugar'
));
define('GESTIONAR_LUGAR_CONSULTA', array(
    'url' => $rutaPrincipal . '/menu/lugar/gestionar/guardar',
    'controlador' => 'LugarControlador',
    'metodo' => 'Consultar'
));
define('GESTIONAR_LUGAR_ELIMINAR', array(
    'url' => $rutaPrincipal . '/menu/lugar/gestionar/eliminar',
    'controlador' => 'LugarControlador',
    'metodo' => 'eliminar'
));
define('GESTIONAR_LUGAR_MODIFICAR', array(
    'url' => $rutaPrincipal . '/menu/lugar/gestionar/modificar',
    'controlador' => 'LugarControlador',
    'metodo' => 'modificar'
));
define('AJAX_PREDETERMINADO', array(
    'url' => $rutaPrincipal . '/paquete/administrador',
    'controlador' => 'RelacionPredeterminadoControlador',
    'metodo' => 'indexMostrar'
));
define('MODIFICAR_PREDETERMINADO', array(
    'url' => $rutaPrincipal . '/paquete/modificar/admin',
    'controlador' => 'RelacionPredeterminadoControlador',
    'metodo' => 'modificarPaq'
));
define('ELIMINAR_PREDETERMINADO', array(
    'url' => $rutaPrincipal . '/paquete/eliminar/admin',
    'controlador' => 'RelacionPredeterminadoControlador',
    'metodo' => 'eliminarFila'
));

//laurita proyecto
define('CREAR_RESERVA_PAQUETE_PREDETERMINADO', array(
    'url' => $rutaPrincipal . '/menu/paquete/descubriendo/predeterminado',
    'controlador' => 'MenuControlador',
    'metodo' => 'indexPredeterminadoConsultarPaquetes'
));
define('INFORMACION_RESERVA', array(
    'url' => $rutaPrincipal . '/menu/reserva/informacion',
    'controlador' => 'ReservaControlador',
    'metodo' => 'vistaReserva'
));
define('RESERVA_INSERTAR', array(
    'url' => $rutaPrincipal . '/menu/reserva/insertar',
    'controlador' => 'ReservaControlador',
    'metodo' => 'insertarPredeterminado'
));
define('INFORMACION_RESERVA_FINAL', array(
    'url' => $rutaPrincipal . '/menu/reserva/informacion/creado/final',
    'controlador' => 'ReservaControlador',
    'metodo' => 'consultarInformacionObligarotioPred'
));
define('CONSULTAR_RESERVAS_USUARIO', array(
    'url' => $rutaPrincipal . '/menu/reserva/consulta/reserva',
    'controlador' => 'ReservaControlador',
    'metodo' => 'consultarReservasUsuario'
));
//MIRAR SI SE PUEDE AÚN ELIMINAR RESERVAS
//define('CAMBIAR_ESTADO_RESERVA_CREADO', array(
//    'url' => $rutaPrincipal . '/menu/reserva/cambiar/estado/reserva/creado',
//    'controlador' => 'ReservaControlador',
//    'metodo' => 'eliminarReservasUsuarioCreado'
//    ));
//define('CAMBIAR_ESTADO_RESERVA_PREDETERMINADO', array(
//    'url' => $rutaPrincipal . '/menu/reserva/cambiar/estado/reserva/predeterminado',
//    'controlador' => 'ReservaControlador',
//    'metodo' => 'eliminarReservasUsuarioPredeterminado'
//    ));
define('CAMBIAR_ESTADO_RESERVA_CREADO', array(
    'url' => $rutaPrincipal . '/menu/reserva/cambiar/estado/reserva/creado',
    'controlador' => 'ReservaControlador',
    'metodo' => 'editarReservasUsuarioCreado'
));
define('CAMBIAR_ESTADO_RESERVA_PREDETERMINADO', array(
    'url' => $rutaPrincipal . '/menu/reserva/cambiar/estado/reserva/predeterminado',
    'controlador' => 'ReservaControlador',
    'metodo' => 'editarReservasUsuarioPredeterminado'
));
define('CERRAR_SESION', array(
    'url' => $rutaPrincipal . '/menu/cerrar/sesion',
    'controlador' => 'UsuarioControlador',
    'metodo' => 'CerrarSesion'
));
define('CREA_TU_PAQUETE_INFORMACION', array(
    'url' => $rutaPrincipal . '/menu/paquete/creatupaquete/informacion',
    'controlador' => 'ReservaControlador',
    'metodo' => 'formularioInfoReservaCreado'));
define('CREA_TU_PAQUETE', array(
    'url' => $rutaPrincipal . '/menu/paquete/creatupaquete',
    'controlador' => 'ReservaControlador',
    'metodo' => 'consultarInformacionObligatoriaCre'));
define('CONFIRMACION_FINAL_RESERVA_CRE', array(
    'url' => $rutaPrincipal . '/paquete/reserva/creada',
    'controlador' => 'ReservaControlador',
    'metodo' => 'confirmacionFinalReservaCreado'
));