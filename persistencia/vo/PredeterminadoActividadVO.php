<?php

namespace persistencia\vo;

use persistencia\generico\IGenericoVO;
class PredeterminadoActividadVO implements IGenericoVO{
    private $id_actividad;
    private $id_paquete_predeterminado;

    
    function getId_actividad() {
        return $this->id_actividad;
    }

    function getId_paquete_predeterminado() {
        return $this->id_paquete_predeterminado;
    }

    function setId_actividad($id_actividad) {
        $this->id_actividad = $id_actividad;
    }

    function setId_paquete_predeterminado($id_paquete_predeterminado) {
        $this->id_paquete_predeterminado = $id_paquete_predeterminado;
    }

    
    
      

 public function getAtributos() {
        $info = array();
        $info['actividad_id_actividad'] = $this->id_actividad;
        $info['paquete_predeterminado_id_paquete_predeterminado'] = $this->id_paquete_predeterminado;
        
        
        return $info;
    }

    public function convertir($info) {
        $atributos = array_keys(get_object_vars($this));
        unset($atributos['listaActividad']);
        foreach ($atributos as $nombreAtributo) {
            if (isset($info['pre_' . $nombreAtributo])) {
                $this->$nombreAtributo = $info['pre_' . $nombreAtributo];
            }
        }
    }
}

