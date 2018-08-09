<?php

namespace negocio\controlador;

use PDO;
use negocio\generico\GenericoControlador;
use persistencia\dao\PaquetePredeterminadoDAO;
use persistencia\dao\PredeterminadoActividadDAO;
use persistencia\vo\PaquetePredeterminadoVO;
use persistencia\vo\PredeterminadoActividadVO;
use const CARPETA_PRINCIPAL;

class PredeterminadoControlador extends GenericoControlador {

    private $predeterminadoDAO;
    private $relacionDAO;

    public function __construct(&$cnn) {
        parent::__construct($cnn);
        $this->predeterminadoDAO = new PaquetePredeterminadoDAO($cnn);
        $this->relacionDAO = new PredeterminadoActividadDAO($cnn);
    }

    public function indexPredeterminado() {
        $usuario = $_SESSION['usuario'];
        $consulta = new PredeterminadoActividadDAO($this->cnn);
        $lista = $consulta->consultar();
        include_once CARPETA_PRINCIPAL . '/vista/RegistrarPredeterminado.php';
    }

    public function consultaPredeterminado() {
        $usuario = $_SESSION['usuario'];
        $consultar = new PaquetePredeterminadoDAO($this->cnn);
        $lista = $consultar->consultarPac();

        include_once CARPETA_PRINCIPAL . '/vista/ConsultarPredeterminado.php';
    }

    public function indexConsultaDetalles() {
        $usuario = $_SESSION['usuario'];
        $consulta = new PaquetePredeterminadoDAO($this->cnn);
        $dato = $_POST['detalles'];
        $listaa = $consulta->consultarId($dato);
        $lista = $consulta->consultarPaquete($dato);
        include_once CARPETA_PRINCIPAL . '/vista/ConsultaDetallesPaquete.php';
    }

    public function insertarPaquete() {
        $usuario = $_SESSION['usuario'];
        $paquete = new PaquetePredeterminadoVO();
        $paquete->setNombre_paquete($_POST['paq_nombre_paquete']);
        $paquete->setPrecio_persona($_POST['paq_precio_persona']);
        $datos = $this->predeterminadoDAO->insertar($paquete);
        $insertar = new PredeterminadoActividadVO();
        $idpac = $_POST['valor'] + 1;
        while (list($key, $value) = each($_POST['check'])) {
            $insertar->setId_paquete_predeterminado($idpac);
            $insertar->setId_actividad($value);
            $this->relacionDAO->insertar($insertar);
        }


        if (isset($datos)) {
            print_r("<script type'text/javascript'>alert('Nombre y precio registrados exitosamente');</script>");
            include_once CARPETA_PRINCIPAL . '/vista/MenuVitutaUsuario.php';
        } else {
            print_r("<script type'text/javascript'>alert('Fallo en el registro');</script>");
        }
    }

    public function eliminar() {
        $dao = new PaquetePredeterminadoDAO($this->cnn);
        $dao->eliminar($_POST['btnELI']);
        print_r($_POST['check']);
    }

}