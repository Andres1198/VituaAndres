<?php

namespace persistencia\vo;

use persistencia\generico\IGenericoVO;

class CreadoActividadVO implements IGenericoVO {

    private $id_actividad;
    private $id_paquete_creado;

    function getId_actividad() {
        return $this->id_actividad;
    }

    function getId_paquete_creado() {
        return $this->id_paquete_creado;
    }

    function setId_actividad($id_actividad) {
        $this->id_actividad = $id_actividad;
    }

    function setId_paquete_creado($id_paquete_creado) {
        $this->id_paquete_creado = $id_paquete_creado;
    }

    public function getAtributos() {
        $info = array();
        $info['paquete_creado_id_paquete_creado'] = $this->id_paquete_creado;
        $info['actividad_id_actividad'] = $this->id_actividad;

        return $info;
    }

    public function convertir($info) {
        $atributos = array_keys(get_object_vars($this));
        unset($atributos['listaActividad']);
        foreach ($atributos as $nombreAtributo) {
            if (isset($info['cre_' . $nombreAtributo])) {
                $this->$nombreAtributo = $info['cre_' . $nombreAtributo];
            }
        }
    }

}
