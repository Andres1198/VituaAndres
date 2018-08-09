<?php
namespace persistencia\vo;
use persistencia\generico\IGenericoVO;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PaquetePredeterminado
 *
 * @author USUARIO
 */
class PaquetePredeterminadoVO implements IGenericoVO{
    
    private $id_paquete_predeterminado;
    private $nombre_paquete;
    private $precio_persona;
    private $foto;
            
    function getFoto() {
        return $this->foto;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

        function getId_paquete_predeterminado() {
        return $this->id_paquete_predeterminado;
    }

    function getNombre_paquete() {
        return $this->nombre_paquete;
    }

    function getPrecio_persona() {
        return $this->precio_persona;
    }

    function setId_paquete_predeterminado($id_paquete_predeterminado) {
        $this->id_paquete_predeterminado = $id_paquete_predeterminado;
    }

    function setNombre_paquete($nombre_paquete) {
        $this->nombre_paquete = $nombre_paquete;
    }

    function setPrecio_persona($precio_persona) {
        $this->precio_persona = $precio_persona;
    }

    


    public function getAtributos() {
        $info = array();
        $info['id_paquete_predeterminado'] = $this->id_paquete_predeterminado;
        $info['nombre_paquete'] = $this->nombre_paquete;
        $info['precio_persona'] = $this->precio_persona;
        $info['foto'] = $this->foto;
        return $info;
        
    }
    public function convertir($info) {
        $atributos = array_keys(get_object_vars($this));
        foreach ($atributos as $nombreAtributo) {
            if (isset($info['paq_' . $nombreAtributo])) {
                $this->$nombreAtributo = $info['paq_' . $nombreAtributo];
            }
        }
    }

}


