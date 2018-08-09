<?php

namespace persistencia\vo;

use persistencia\generico\IGenericoVO;

class ActividadVO implements IGenericoVO {

    private $id_actividad;
    private $nombre_actividad;
    private $duracion_aproximada;
    private $recomendacion;
    private $categoria;
    private $descripcion;
    private $edad_recomendada;
    private $valor_actividad;
    private $disponibilidad;
    private $estado;
    private $listaActividad = array();

    function getId_actividad() {
        return $this->id_actividad;
    }

    function getNombre_actividad() {
        return $this->nombre_actividad;
    }

    function getDuracion_aproximada() {
        return $this->duracion_aproximada;
    }

    function getRecomendacion() {
        return $this->recomendacion;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getEdad_recomendada() {
        return $this->edad_recomendada;
    }

    function getValor_actividad() {
        return $this->valor_actividad;
    }

    function setId_actividad($id_actividad) {
        $this->id_actividad = $id_actividad;
    }

    function setNombre_actividad($nombre_actividad) {
        $this->nombre_actividad = $nombre_actividad;
    }

    function setDuracion_aproximada($duracion_aproximada) {
        $this->duracion_aproximada = $duracion_aproximada;
    }

    function setRecomendacion($recomendacion) {
        $this->recomendacion = $recomendacion;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setEdad_recomendada($edad_recomendada) {
        $this->edad_recomendada = $edad_recomendada;
    }

    function setValor_actividad($valor_actividad) {
        $this->valor_actividad = $valor_actividad;
    }
    
    function getEstado() {
        return $this->estado;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }
    
    function getDisponibilidad() {
        return $this->disponibilidad;
    }

    function setDisponibilidad($disponibilidad) {
        $this->disponibilidad = $disponibilidad;
    }

    
    public function getAtributos() {
        $info = array();
        $info['id_actividad'] = $this->id_actividad;
        $info['nombre_actividad'] = $this->nombre_actividad;
        $info['duracion_aproximada'] = $this->duracion_aproximada;
        $info['recomendacion'] = $this->recomendacion;
        $info['categoria'] = $this->categoria;
        $info['descripcion'] = $this->descripcion;
        $info['edad_recomendada'] = $this->edad_recomendada;
        $info['valor_actividad'] = $this->valor_actividad;
        $info['estado'] = $this->estado;
        $info['disponibilidad'] = $this->disponibilidad;
        return $info;
    }

    public function convertir($info) {
        $atributos = array_keys(get_object_vars($this));
        unset($atributos['listaActividad']);
        foreach ($atributos as $nombreAtributo) {
            if (isset($info['act_' . $nombreAtributo])) {
                $this->$nombreAtributo = $info['act_' . $nombreAtributo];
            }
        }
    }

    function getListaActividad() {
        return $this->listaActividad;
    }

    function setListaActividad($listaActividad) {
        $this->listaActividad = $listaActividad;
    }

}
