<?php

namespace negocio\controlador;

use negocio\generico\GenericoControlador;
use PDO;
use persistencia\dao\PredeterminadoActividadDAO;
use persistencia\vo\PaquetePredeterminadoVO;
use const CARPETA_PRINCIPAL;

class RelacionPredeterminadoControlador extends GenericoControlador {

    private $utilidadDAO;
    

    public function __construct(&$cnn) {
        parent::__construct($cnn);
        $this->utilidadDAO = new PredeterminadoActividadDAO($cnn);
    }
    
     public function indexMostrar() {
        $usuario = $_SESSION['usuario'];
        include_once CARPETA_PRINCIPAL . '/vista/ConsultarPredeterminadoAdmin.php';
    }    
    
     public function indexAdmin() {
        $usuario = $_SESSION['usuario'];
        $consulta = new PredeterminadoActividadDAO($this->cnn);
        $lista = $consulta->consultarPaquete();
        
    }
  
    public function eliminarFila() {
         $usuario = $_SESSION['usuario'];
        $consulta = new PredeterminadoActividadDAO($this->cnn);
        $lista = $consulta->eliminarRow();
    }
    public function modificarPaq() {
         $usuario = $_SESSION['usuario'];
        $consulta = new PredeterminadoActividadDAO($this->cnn);
        $lista = $consulta->modificar();
    }

   

}
