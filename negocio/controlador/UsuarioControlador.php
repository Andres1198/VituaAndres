<?php

namespace negocio\controlador;

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use negocio\excepcion\VitutaExcepcion;
use negocio\generico\GenericoControlador;
use negocio\util\Validacion;
use persistencia\dao\UsuarioDAO;
use persistencia\vo\UsuarioVO;

class UsuarioControlador extends GenericoControlador {

    /**
     *
     * @var UsuarioDAO 
     */
    private $usuarioDAO;

    public function __construct(&$cnn) {
        parent::__construct($cnn);
        $this->usuarioDAO = new UsuarioDAO($cnn);
    }

    public function indexRegistrar() {
        include_once CARPETA_PRINCIPAL . '/vista/RegistrarUsuario.php';
    }

    public function guardar() {
        
            $usuario = new UsuarioVO();
            $usuario->convertir($_POST);
            $usuario->setRoll('usuario');
            $datos=$this->usuarioDAO->insertar($usuario);
            
        if (isset($datos)) {
            print_r("<script type'text/javascript'>alert('Nombre y precio registrados exitosamente');</script>");
            include_once CARPETA_PRINCIPAL .'/vista/InicioSesion.php' ;
        } else
        {
            print_r("<script type'text/javascript'>alert('Fallo en el registro');</script>");

            }
        }
    
    public function indexModificar() {
        $dao = new UsuarioDAO($this->cnn);
        $dao->consultar();
        include_once CARPETA_PRINCIPAL . '/vista/modificar.php';
    }

    public function modificarUsuario() {
        print_r($_SESSION['id_usuario']);
        $objUsuario = $_SESSION['usuario'];
        $objUsuario->setNombre($_POST['usu_nombre']);
        $objUsuario->setApellido($_POST['usu_apellido']);
        $dao = new UsuarioDAO($this->cnn);
        $dao->editar($objUsuario, "id_usuario=".$objUsuario->getIdUsuario());
    }

    public function autenticar() {

        $correo = $_POST['usu_correo'];
        $clave = $_POST['usu_clave'];
        $autenticar = $this->usuarioDAO->autenticar($correo, $clave);
        if (is_null($autenticar)) {
            header('Location: ' . RUTA_PRINCIPAL);
            return;
        }

//        if (isset($_POST['usu_recordarme'])) {
//            $info = json_encode($autenticar->getAtributos());
//            $tiempo = (time() + 1) + ( 60 * 60 * 24 * 365);
//            setcookie('usuario', $info, $tiempo, RUTA_PRINCIPAL);
//        }
        $_SESSION['usuario'] = $autenticar;
        header('Location: ' . MENU['url']);
    }

    public function indexClave() {
        include_once CARPETA_PRINCIPAL . '/vista/OlvidoClave.php';
    }

    public function indexInicio() {
        include_once CARPETA_PRINCIPAL . '/vista/InicioSesion.php';
    }
    public function CerrarSesion(){
        session_destroy();
        include_once CARPETA_PRINCIPAL . '/vista/InicioSesion.php';
    }
}
