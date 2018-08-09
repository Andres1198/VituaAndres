<?php

namespace negocio\controlador;

use negocio\generico\GenericoControlador;
use persistencia\dao\ActividadDAO;
use persistencia\vo\ActividadVO;
use const CARPETA_PRINCIPAL;

class ActividadControlador extends GenericoControlador {

    /**
     *
     * @var ActividadDAO 
     */
    private $ActividadDAO;

    public function __construct(&$cnn) {
        parent::__construct($cnn);
        $this->ActividadDAO = new ActividadDAO($cnn);
    }

    public function indexActividad() {
        include_once CARPETA_PRINCIPAL . '/vista/RegistrarActividad.php';
    }

    public function insertarActividad() {
        if (isset($_FILES['pro_foto_temp'])) {
            $foto = $_FILES['pro_foto_temp'];
            $ext = str_replace('image/', '', $foto['type']);
            $nombreFinal = round(microtime(true) * 1000)
                    . '_' . rand(0, 1000) . '.' . $ext;
            $ruta = CARPETA_PRINCIPAL . '/archivos/' .
                    $nombreFinal;
            move_uploaded_file($foto['tmp_name'], $ruta);
        }
        $actividad = new ActividadVO();
        $actividad->setNombre_actividad($_POST['nombre']);
        $actividad->setDuracion_aproximada($_POST['duracion']);
        $actividad->setRecomendacion($_POST['recomendacion']);
        $actividad->setCategoria($_POST['categoria']);
        $actividad->setDescripcion($_POST['descripcion']);
        $actividad->setEdad_recomendada($_POST['edad']);
        $actividad->setValor_actividad($_POST['valor']);
        $actividad->setDisponibilidad('Disponible');
        $actividad->setEstado('Activo');
        $datos = $this->ActividadDAO->insertar($actividad);
        if (isset($datos)) {
            print_r("<script type='text/javascript'>alert('Actividad registrada con exito');</script>");
        } else {
            print_r("<script type='text/javascript'>alert('Actividad no registrada');</script>");
        }
    }

    
    public function indexModificar() {
        include_once CARPETA_PRINCIPAL . '/vista/GestionarActividad.php';
    }

    public function consultarAc() {
      $consulta = new ActividadDAO($this->cnn);
      $lista = $consulta->consultarActividad();
       print_r($lista);
    }

    public function eliminarActividad() {
        $id = $_POST['id'];
        $consulta = new ActividadDAO($this->cnn);
        $lista = $consulta->eliminarAc($id);
    }

    public function modificar() {
        $consulta = new ActividadDAO($this->cnn);
        $lista = $consulta->modificar();
    }

}
