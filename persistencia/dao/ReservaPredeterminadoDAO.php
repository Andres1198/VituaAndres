<?php

namespace persistencia\dao;

use persistencia\generico\GenericoDAO;
use PDO;

class ReservaPredeterminadoDAO extends GenericoDAO {

    public function __construct($cnn) {
        parent::__construct($cnn, 'reserva_predeterminado');
    }

    public function consultar() {
        $sql = "select * from reserva_predeterminado";
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

    public function consultarReserva() {
        $sql = "SELECT R.cantidad_personas,R.fecha_servicio,R.fecha_reserva,
		pac.nombre_paquete,U.nombre,U.numero_documento,U.correo
		FROM reserva_predeterminado As R 
		JOIN paquete_predeterminado As pac ON R.paquete_predeterminado_id_paquete_predeterminado=pac.id_paquete_predeterminado
		JOIN usuario As U ON R.usuario_id_usuario=U.id_usuario";
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

    public function consultarGuiaSeguro() {
        $sql = "select id_valor_guia, valor_guia, id_valor_seguro, valor_seguro from valor_guia,valor_seguro order by id_valor_guia desc, id_valor_seguro desc limit 1";
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

    public function consultarReservaPredeterminado() {
        $sql = "select nombre_paquete, id_reserva_predeterminado, fecha_servicio, cantidad_personas , valor_total 
            from reserva_predeterminado
            inner join paquete_predeterminado
            on(paquete_predeterminado_id_paquete_predeterminado = id_paquete_predeterminado)
            where usuario_id_usuario = " . $_SESSION['id_usuario'] . " and estado_reserva_pre ='activa'";
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

    public function editarEstadoReservaPredeterminada($id) {
        $sql = "UPDATE reserva_predeterminado SET estado_reserva_pre = 'cancelada' WHERE id_reserva_predeterminado = $id";
        $sentencia = $this->cnn->prepare($sql);
        return $sentencia->execute();
    }

}
