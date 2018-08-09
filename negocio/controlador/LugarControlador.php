<?php

namespace negocio\controlador;

use negocio\generico\GenericoControlador;
use persistencia\dao\ActividadDAO;
use persistencia\dao\LugarDAO;
use persistencia\vo\LugaresVO;
use const CARPETA_PRINCIPAL;

class LugarControlador extends GenericoControlador {

    /**
     *
     * @var LugarDAO 
     */
    private $LugarDAO;

    public function __construct(&$cnn) {
        parent::__construct($cnn);
        $this->LugarDAO = new LugarDAO($cnn);
    }

    public function indexLugar() {
        $act = new ActividadDAO($this->cnn);
        $datos=$act->consultar();
        
        include_once CARPETA_PRINCIPAL . '/vista/RegistrarLugar.php';
    }

    public function insertarLugar() {
        $lugar = new LugaresVO();
        $lugar->setActividad_id_actividad($_POST['actividad']);
        $lugar->setNombre_lugar($_POST['nombreLugar']);
        $lugar->setDistancia_casco_urbano($_POST['distancia']);
        $lugar->setUbicacion($_POST['ubicacion']);
        $lugar->setAltura_nivel_mar($_POST['altura']);
        $lugar->setDescripcion($_POST['descripcion']);
        $lugar->setDisponibilidad('Disponible');
        $lugar->setEstado('Activo');
        $datos = $this->LugarDAO->insertar($lugar);
        print_r('Lugar Registrado');
    }

    public function indexGestionarLugar() {
        include_once CARPETA_PRINCIPAL . '/vista/GestionarLugar.php';
    }

    public function Consultar() {
        $consulta = new LugarDAO($this->cnn);
        $lista = $consulta->consultarLugar();
        print_r($lista);
    }

    public function eliminar() {
        try {
            $consulta = new LugarDAO($this->cnn);
            $id = $_POST['id'];
            $lista = $consulta->eliminarlugar($id);
            $array['codigo'] = 1;
            $array['mensaje'] = 'Se elimino con exito';
        } catch (Exception $ex) {
            print_r($ex);
            $array['codigo'] = -1;
            $array['mensaje'] = 'Algo pasó';
        }
        header('Content-Type:application/json');
        echo json_encode($array);
    }

    public function modificar() {
        $consulta = new LugarDAO($this->cnn);
        $lista = $consulta->modificar();
    }

}
