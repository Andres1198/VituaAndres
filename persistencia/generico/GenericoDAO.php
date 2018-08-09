<?php

namespace persistencia\generico;

abstract class GenericoDAO {

    protected $cnn;
    private $tabla;

    public function __construct(&$cnn, $tabla) {
        $this->cnn = $cnn;
        $this->tabla = $tabla;
    }

    public function insertar(IGenericoVO $obj) {
        $listaAtributos = $obj->getAtributos();
        $listaCampos = '';
        $listaValores = '';
        $info = array();
        foreach ($listaAtributos as $nombreCampo => $valor) {
            if (is_null($valor)) {
                continue;
            }
            $listaCampos .= ',' . $nombreCampo;
            $listaValores .= ',:' . $nombreCampo;
            $info[$nombreCampo] = $valor;
        }
        $sql = 'INSERT INTO ' . $this->tabla . ' (' . trim($listaCampos, ',') . ') VALUES (' . trim($listaValores, ',') . ') ';
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute($info);
        return $this->cnn->lastInsertId();
    }

    public function editar(IGenericoVO $obj, $condicion) {
        $listaAtributos = $obj->getAtributos();
        return $this->editarArray($listaAtributos, $condicion);
    }

    public function editarNulo(IGenericoVO $obj, $condicion) {
        $listaAtributos = $obj->getAtributos();
        return $this->editarArray($listaAtributos, $condicion, true);
    }

    public function editarArray($array, $condicion, $setNulo = false) {
        $listaAtributos = $array;
        $listaCampos = '';
        $info = array();
        foreach ($listaAtributos as $nombreCampo => $valor) {

            if (!$setNulo && is_null($valor)) {
                continue;
            }
            if (is_null($valor)) {
                $listaCampos .= ', ' . $nombreCampo . ' = NULL ';
                continue;
            }
            $info[$nombreCampo] = $valor;
            $listaCampos .= ', ' . $nombreCampo . ' = :' . $nombreCampo;
        }
        $sql = ' UPDATE ' . $this->tabla . ' SET ' . trim($listaCampos, ',') . ' WHERE ' . $condicion;
        $sentencia = $this->cnn->prepare($sql);
        return $sentencia->execute($info);
    }

    public function eliminar($id) {
        $sql = ' DELETE FROM ' . $this->tabla . ' WHERE id_' . $this->tabla . ' = :id ';
        $sentencia = $this->cnn->prepare($sql);
        $info = array();
        $info['id'] = $id;
        return $sentencia->execute($info);
    }
}
