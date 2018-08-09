<?php

namespace negocio\controlador;

use negocio\generico\GenericoControlador;
use persistencia\dao\ActividadDAO;
use persistencia\dao\PaquetePredeterminadoDAO;
use persistencia\dao\ReservaPredeterminadoDAO;
use const CARPETA_PRINCIPAL;

/**
 * Description of MenuControlador
 *
 * @author Usuario
 */
class MenuControlador extends GenericoControlador {

    public function __construct(&$cnn) {
        parent::__construct($cnn);
        parent::validarSesion();
    }

    public function index() {
        $usuario = $_SESSION['usuario'];
        if ($_SESSION['rol'] == 'usuario') {
            include_once './vista/MenuVitutaUsuario.php';
            return;
        } else if ($_SESSION['rol'] == 'administrador') {
            include_once './vista/MenuVitutaAdministrador.php';
            return;
        }
    }

    public function indexPredeterminadoConsultar() {
        $usuario = $_SESSION['usuario'];
        $predeterminadoDAO = new PaquetePredeterminadoDAO($this->cnn);
        $lista = $predeterminadoDAO->consultar();
        include_once CARPETA_PRINCIPAL . '/vista/ConsultarPredeterminado.php';
    }

    public function indexPrueba() {
        $usuario = $_SESSION['usuario'];
        include_once CARPETA_PRINCIPAL . '/vista/prueba.php';
    }

    //laura proyecto 
    public function indexPredeterminadoConsultarPaquetes() {
        $usuario = $_SESSION['usuario'];
        $predeterminadoDAO = new PaquetePredeterminadoDAO($this->cnn);
        $lista = $predeterminadoDAO->consultar();
        include_once CARPETA_PRINCIPAL . '/vista/ConsultaPredeterminadoPaquete.php';
    }

}
