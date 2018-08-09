<?php

namespace negocio\controlador;

use negocio\generico\GenericoControlador;
use persistencia\dao\ActividadDAO;
use persistencia\dao\CreadoActividadDAO;
use persistencia\dao\PaqueteCreadoDAO;
use persistencia\dao\ReservaCreadoDAO;
use persistencia\dao\ReservaPredeterminadoDAO;
use persistencia\vo\CreadoActividadVO;
use persistencia\vo\PaqueteCreadoVO;
use persistencia\vo\ReservaCreadoVO;
use persistencia\vo\ReservaPredeterminadoVO;
use persistencia\vo\UsuarioVO;
use const CARPETA_PRINCIPAL;

class ReservaControlador extends GenericoControlador {

    private $reservaPredeterminadoDAO;
    private $reservaCreadoDAO;

    public function __construct(&$cnn) {
        parent::__construct($cnn);
        $this->reservaPredeterminadoDAO = new ReservaPredeterminadoDAO($cnn);
        $this->reservaCreadoDAO = new ReservaCreadoDAO($cnn);
    }

    public function indexReserva() {
        include_once CARPETA_PRINCIPAL . '/vista/Reserva.php';
    }

    public function consultarInformacionObligarotioPred() {
        echo $id_pred_paquete = $_POST['id_paquete_pre'];
        echo $precio_paquete = $_POST['precio_paquete'];
        echo $nombre_paquete = $_POST['nombre_paquete'];
        echo $fecha_reserva = $_POST['fecha_reserva'];
        echo $cantidad_personas = $_POST['cantidad_personas'];
        $lista = $this->reservaPredeterminadoDAO->consultarGuiaSeguro();
        echo json_encode($_POST['id_paquete_pre']);
        include_once CARPETA_PRINCIPAL . '/vista/InfoFinalReservaPredeterminado.php';
    }

    public function insertarPredeterminado() {
        $usuario = new UsuarioVO();
        $reserva_predeterminado = new ReservaPredeterminadoVO();
        $reserva_predeterminado->setId_valor_guia($_POST['id_valor_guia']);
        $reserva_predeterminado->setId_valor_seguro($_POST['id_valor_seguro']);
        $reserva_predeterminado->setId_paquete_predeterminado($_POST['id_paquete_pre']);
        $reserva_predeterminado->setFecha_servicio($_POST['fecha_servicio']);
        $reserva_predeterminado->setFecha_reserva((date("Y/m/d")));
        $reserva_predeterminado->setCantidad_guias($_POST['cantidad_guias']);
        $reserva_predeterminado->setCantidad_personas($_POST['cantidad_personas']);
        $reserva_predeterminado->setValor_total($_POST['valor_total']);
        $reserva_predeterminado->setEstado_reserva_pre('activa');
        $reserva_predeterminado->setId_usuario($_SESSION['id_usuario']);
        $this->reservaPredeterminadoDAO->insertar($reserva_predeterminado);
        echo json_encode($_POST['valor_total']);
    }

    public function consultarInformacionObligatoriaCre() {
        $actividades = $_POST;
        $ActividadesDAO = new ActividadDAO($this->cnn);
        foreach ($actividades as $value) {
            $infoActividades[] = $listaActividades = $ActividadesDAO->consultarActividadesDependiendo($value);
        }
        $seguroGuia = $this->reservaPredeterminadoDAO->consultarGuiaSeguro();
        include_once CARPETA_PRINCIPAL . '/vista/CaracteristicasReservaCreada.php';
    }

    public function confirmacionFinalReservaCreado() {
          $cantidad_personas = $_POST['cantidad_personas'];
                $contador = 0;
                $cantidad_guias = 0;
                for ($i = 0; $i < $cantidad_personas; $i++) {
                    $contador = $contador + 1;
                    if ($contador == 5) {
                        $cantidad_guias = $cantidad_guias + 1;
                        $contador = 0;
                    }
                }
                if ($cantidad_personas % 5 != 0) {
                    $cantidad_guias = $cantidad_guias + 1;
                }
        $valorTotal = ($_POST['valor_paquete_persona']) * $_POST['cantidad_personas'];
        $paqueteCreado = new PaqueteCreadoVO();
        $paqueteCreado->setNombre_creado($_POST['nombre_personalizado']);
        $paqueteCreado->setPrecio_paquete($_POST['valor_paquete_persona']);
        $paqueteCreadoDAO = new PaqueteCreadoDAO($this->cnn);
        $resultado1 = $paqueteCreadoDAO->insertar($paqueteCreado);
        $usuario = new UsuarioVO();
        $reserva_creado = new ReservaCreadoVO();
        $reserva_creado->setId_valor_seguro($_POST['id_seguro']);
        $reserva_creado->setId_valor_guia($_POST['id_guia']);
        $reserva_creado->setId_paquete_creado($resultado1);
        $reserva_creado->setFecha_servicio($_POST['fecha_servicio']);
        $reserva_creado->setFecha_reserva((date("Y/m/d")));
        $reserva_creado->setCantidad_guias($cantidad_guias);
        $reserva_creado->setCantidad_personas($_POST['cantidad_personas']);
        $reserva_creado->setValor_total($valorTotal);
        $reserva_creado->setEstado_reserva_cre('activa');
        $reserva_creado->setId_usuario($_SESSION['id_usuario']);
        $resultado2 = $this->reservaCreadoDAO->insertar($reserva_creado);
        $creado_actividad = new CreadoActividadVO();
        $cantidadActividades = $_POST['cantidad_actividades'];
        $CreadoActividadDAO = new CreadoActividadDAO($this->cnn);
        for ($index = 0; $index < $cantidadActividades; $index++) {
        print_r($_POST['cantidad_actividades']);
            $creado_actividad->setId_actividad($_POST['cantidad_actividades' . $index]);
            $creado_actividad->setId_paquete_creado($resultado1);
            $resultado3 = $CreadoActividadDAO->insertar($creado_actividad);
        }
    }

    public function formularioInfoReservaCreado() {
        $ActividadDAO = new ActividadDAO($this->cnn);
        $lista = $ActividadDAO->consultar();
        include_once CARPETA_PRINCIPAL . '/vista/Creatupaquete.php';
    }

    public function vistaReserva() {
        $id_paquete = $_POST['id_paquete'];
        $nombre_paquete = $_POST['nombre_paquete'];
        $precio_paquete = $_POST['precio_paquete'];
        echo json_encode($_POST['id_paquete']);

        include_once CARPETA_PRINCIPAL . '/vista/ReservaPredeterminado.php';
    }

    public function consultarReservasUsuario() {
        $listaCreado = $this->reservaCreadoDAO->consultarReservaCreado();
        $listaPredeterminado = $this->reservaPredeterminadoDAO->consultarReservaPredeterminado();
        include_once CARPETA_PRINCIPAL . '/vista/ConsultarReservas.php';
    }

    public function editarReservasUsuarioCreado() {
        echo "loquesea";
        $id = $_POST['id_reserva'];
        $this->reservaCreadoDAO->editarEstadoReservaCreada($id);

//        header('Content-Type:application/json');
//        echo json_encode($id);
    }

    public function editarReservasUsuarioPredeterminado() {
        var_dump("asdasd");
        $id = $_POST['id_reserva'];
        $this->reservaPredeterminadoDAO->editarEstadoReservaPredeterminada($id);
        header('Content-Type:application/json');
        echo json_encode($id);
    }

}
