<?php

namespace persistencia\dao;

use PDO;
use persistencia\generico\GenericoDAO;

class LugarDAO extends GenericoDAO {

    public function __construct(&$cnn) {
        parent::__construct($cnn, 'lugar');
    }

    public function consultar() {
        $sql = "select * from lugar";
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $array = $sentencia->fetchAll();
        header('Content-Type:application/json');
        return $array;
    }

    public function consultarLugar() {
        $sql = "select * from lugar where estado='Activo' order by id_lugar";
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $array = $sentencia->fetchAll();
        header('Content-Type:application/json');
        echo json_encode($array);
    }

    public function eliminarlugar($id) {
        try {
            $id=$_POST['id'];
            print_r(var_dump($id));
            $sql = "update lugar set estado='Inactivo' where id_lugar = :id";
            $sentencia = $this->cnn->prepare($sql);
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
            
        } catch (Exception $ex) {
           
        }
        header('Content-Type:application/json');
        echo json_encode($array);
    }

    public  function modificar() {
        try {
            $sql = 'update lugar set nombre_lugar = :nombre, descripcion = :descripcion,disponibilidad=:disponibilidad where id_lugar = :id ';
            $sentencia = $this->cnn->prepare($sql);
            $array=$sentencia->execute($_POST);
        } catch (Exception $ex) {
            
        }
        header('Content-Type:application/json');
        echo json_encode($array);
    }

}
