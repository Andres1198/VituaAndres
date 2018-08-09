<?php

namespace persistencia\vo;
use persistencia\generico\IGenericoVO;


class PaqueteCreadoVO implements IGenericoVO {
   
    private $id_paquete_creado;
    private $nombre_creado;
    private $precio_paquete;
    
    

    function getId_paquete_creado() {
        return $this->id_paquete_creado;
    }

    function getNombre_creado() {
        return $this->nombre_creado;
    }

    function getPrecio_paquete() {
        return $this->precio_paquete;
    }

    function setId_paquete_creado($id_paquete_creado) {
        $this->id_paquete_creado = $id_paquete_creado;
    }

    function setNombre_creado($nombre_creado) {
        $this->nombre_creado = $nombre_creado;
    }

    function setPrecio_paquete($precio_paquete) {
        $this->precio_paquete = $precio_paquete;
    }

      

 public function getAtributos() {
        $info = array();
        $info['id_paquete_creado'] = $this->id_paquete_creado;
        $info['nombre_creado'] = $this->nombre_creado;
        $info['precio_paquete'] = $this->precio_paquete;
        
        return $info;
    }

    public function convertir($info) {
        $atributos = array_keys(get_object_vars($this));
        unset($atributos['listaActividad']);
        foreach ($atributos as $nombreAtributo) {
            if (isset($info['paq_' . $nombreAtributo])) {
                $this->$nombreAtributo = $info['paq_' . $nombreAtributo];
            }
        }
    }
}
