<?php

namespace persistencia\vo;

use persistencia\generico\IGenericoVO;


class ReservaPredeterminadoVO implements IGenericoVO{
    private $id_reserva_predeterminado;
    private $id_usuario;
    private $id_valor_guia;
    private $id_valor_seguro;
    private $id_paquete_predeterminado;
    private $fecha_reserva;
    private $fecha_servicio;
    private $cantidad_personas;
    private $cantidad_guias;
    private $estado_reserva_pre;
    private $valor_total;


   
function getId_reserva_predeterminado() {
    return $this->id_reserva_predeterminado;
}

 function getId_usuario() {
    return $this->id_usuario;
}

 function getId_valor_guia() {
    return $this->id_valor_guia;
}

 function getId_valor_seguro() {
    return $this->id_valor_seguro;
}

 function getId_paquete_predeterminado() {
    return $this->id_paquete_predeterminado;
}

 function getFecha_reserva() {
    return $this->fecha_reserva;
}

 function getFecha_servicio() {
    return $this->fecha_servicio;
}

 function getCantidad_personas() {
    return $this->cantidad_personas;
}

 function getCantidad_guias() {
    return $this->cantidad_guias;
}

 function getEstado_reserva_pre() {
    return $this->estado_reserva_pre;
}

 function getValor_total() {
    return $this->valor_total;
}

 function setId_reserva_predeterminado($id_reserva_predeterminado) {
    $this->id_reserva_predeterminado = $id_reserva_predeterminado;
}

 function setId_usuario($id_usuario) {
    $this->id_usuario = $id_usuario;
}

 function setId_valor_guia($id_valor_guia) {
    $this->id_valor_guia = $id_valor_guia;
}

 function setId_valor_seguro($id_valor_seguro) {
    $this->id_valor_seguro = $id_valor_seguro;
}

 function setId_paquete_predeterminado($id_paquete_predeterminado) {
    $this->id_paquete_predeterminado = $id_paquete_predeterminado;
}

 function setFecha_reserva($fecha_reserva) {
    $this->fecha_reserva = $fecha_reserva;
}

 function setFecha_servicio($fecha_servicio) {
    $this->fecha_servicio = $fecha_servicio;
}

 function setCantidad_personas($cantidad_personas) {
    $this->cantidad_personas = $cantidad_personas;
}

 function setCantidad_guias($cantidad_guias) {
    $this->cantidad_guias = $cantidad_guias;
}

 function setEstado_reserva_pre($estado_reserva_pre) {
    $this->estado_reserva_pre = $estado_reserva_pre;
}

 function setValor_total($valor_total) {
    $this->valor_total = $valor_total;
}

   
 public function getAtributos() {
         $info = array();
        $info['id_reserva_predeterminado'] = $this->id_reserva_predeterminado;
        $info['usuario_id_usuario'] = $this->id_usuario;
        $info['valor_guia_id_valor_guia'] = $this->id_valor_guia;
        $info['valor_seguro_id_valor_seguro'] = $this->id_valor_seguro;
        $info['paquete_predeterminado_id_paquete_predeterminado'] = $this->id_paquete_predeterminado;
        $info['fecha_reserva'] = $this->fecha_reserva;
        $info['fecha_servicio'] = $this->fecha_servicio;
        $info['cantidad_guias'] = $this->cantidad_guias;
        $info['cantidad_personas'] = $this->cantidad_personas;
        $info['valor_total'] = $this->valor_total;
        $info['estado_reserva_pre'] = $this->estado_reserva_pre;
        return $info;
    }
    public function convertir($info) {
        $atributos = array_keys(get_object_vars($this));
       
        foreach ($atributos as $nombreAtributo) {
            if (isset($info['res_' . $nombreAtributo])) {
                $this->$nombreAtributo = $info['res_' . $nombreAtributo];
            }
        }
    }
   
}












