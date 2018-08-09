<?php

namespace persistencia\vo;

use persistencia\generico\IGenericoVO;

class UsuarioVO implements IGenericoVO {

    private $id_usuario;
    private $nombre;
    private $apellido;
    private $correo;
    private $genero;
    private $clave;
    private $roll;
    private $telefono;
    private $tipo_documento;
    private $numero_documento;

    function getIdUsuario() {
        return $this->id_usuario;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getGenero() {
        return $this->genero;
    }

    function getClave() {
        return $this->clave;
    }

    function getRoll() {
        return $this->roll;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getEstado_usuario() {
        return $this->estado_usuario;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setRoll($roll) {
        $this->roll = $roll;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function getTipo_documento() {
        return $this->tipo_documento;
    }

    function getNumero_documento() {
        return $this->numero_documento;
    }

    function setTipo_documento($tipo_documento) {
        $this->tipo_documento = $tipo_documento;
    }

    function setNumero_documento($numero_documento) {
        $this->numero_documento = $numero_documento;
    }

    public function convertir($info) {
        $atributos = array_keys(get_object_vars($this));

        foreach ($atributos as $nombreAtributo) {
            if (isset($info['usu_' . $nombreAtributo])) {
                $this->$nombreAtributo = $info['usu_' . $nombreAtributo];
            }
        }
    }

    public function getAtributos() {
        $atributos = array();
        $atributos['id_usuario'] = $this->id_usuario;
        $atributos['nombre'] = $this->nombre;
        $atributos['apellido'] = $this->apellido;
        $atributos['correo'] = $this->correo;
        $atributos['genero'] = $this->genero;
        $atributos['clave'] = $this->clave;
        $atributos['rol'] = $this->roll;
        $atributos['telefono'] = $this->telefono;
        $atributos['tipo_documento'] = $this->tipo_documento;
        $atributos['numero_documento'] = $this->numero_documento;
        return $atributos;
    }

}
