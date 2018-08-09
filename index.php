<?php

require_once './autoload.php';
require_once './ruta.php';
if (!isset($_SERVER['PATH_INFO'])) {
    if (isset($_COOKIE['usuario'])) {
        session_start();
        $infoUsuario = json_decode($_COOKIE['usuario'], true);
        $usuario = new UsuarioVO;
        $usuario->setIdPropietario($infoUsuario['id_usuario']);
        $usuario->setNombre($infoUsuario['nombre']);
        $usuario->setApellido($infoUsuario['apellido']);
        $_SESSION['usuario'] = $usuario;
        header('Location:' . MENU['url']);
        if ($_SESSION['rol']=='usuario') {
        include_once './vista/MenuVitutaUsuario.php';
        return;
        }else if($_SESSION['rol']=='administrador'){
        include_once './vista/MenuVitutaAdministrador.php';
        return;    
        }
    } else {
        include_once './vista/InicioSesion.php';
        return;
    }
}

use persistencia\conexion\Conexion;
use persistencia\vo\UsuarioVO;

$cnn = Conexion::conectar();
$url = $rutaPrincipal . $_SERVER['PATH_INFO'];
foreach (get_defined_constants() as $constante) {
    if (!is_array($constante)) {
        continue;
    }
    if ($url == $constante['url']) {
        $clase = '\\negocio\\controlador\\' . $constante['controlador'];
        $obj = new $clase($cnn);
        $metodo = $constante['metodo'];
        $obj->$metodo();
        break;
    }
}
