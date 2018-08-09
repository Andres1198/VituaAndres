<?php

namespace persistencia\vo;

use persistencia\generico\IGenericoVO;

class LugaresVO implements IGenericoVO {

    private $id_lugar;
    private $actividad_id_actividad;
    private $nombre_lugar;
    private $distancia_casco_urbano;
    private $ubicacion;
    private $altura_nivel_mar;
    private $descripcion;
    private $disponibilidad;
    private $estado;

    function getId_lugar() {
        return $this->id_lugar;
    }

    function getAtividad_id_actividad() {
        return $this->actividad_id_actividad;
    }

    function getNombre_lugar() {
        return $this->nombre_lugar;
    }

    function getDistancia_casco_urbano() {
        return $this->distancia_casco_urbano;
    }

    function getUbicacion() {
        return $this->ubicacion;
    }

    function getAltura_nivel_mar() {
        return $this->altura_nivel_mar;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getDisponibilidad() {
        return $this->disponibilidad;
    }

    function setId_lugar($id_lugar) {
        $this->id_lugar = $id_lugar;
    }

    function setActividad_id_actividad($actividad_id_actividad) {
        $this->actividad_id_actividad = $actividad_id_actividad;
    }

    function setNombre_lugar($nombre_lugar) {
        $this->nombre_lugar = $nombre_lugar;
    }

    function setDistancia_casco_urbano($distancia_casco_urbano) {
        $this->distancia_casco_urbano = $distancia_casco_urbano;
    }

    function setUbicacion($ubicacion) {
        $this->ubicacion = $ubicacion;
    }

    function setAltura_nivel_mar($altura_nivel_mar) {
        $this->altura_nivel_mar = $altura_nivel_mar;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setDisponibilidad($disponibilidad) {
        $this->disponibilidad = $disponibilidad;
    }
    
    function getEstado() {
        return $this->estado;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

            
    public function getAtributos() {
        $info = array();
        $info['id_lugar'] = $this->id_lugar;
        $info['actividad_id_actividad'] = $this->actividad_id_actividad;
        $info['nombre_lugar'] = $this->nombre_lugar;
        $info['distancia_casco_urbano'] = $this->distancia_casco_urbano;
        $info['ubicacion'] = $this->ubicacion;
        $info['altura_nivel_mar'] = $this->altura_nivel_mar;
        $info['descripcion'] = $this->descripcion;
        $info['disponibilidad'] = $this->disponibilidad;
        $info['estado'] = $this->estado;
        return $info;
    }

    public function convertir($info) {
        $atributos = array_keys(get_object_vars($this));
        unset($atributos['listaActividad']);
        foreach ($atributos as $nombreAtributo) {
            if (isset($info['lug_' . $nombreAtributo])) {
                $this->$nombreAtributo = $info['lug_' . $nombreAtributo];
            }
        }
    }
}
