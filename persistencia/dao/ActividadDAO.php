<?php

namespace persistencia\dao;

use PDO;
use persistencia\generico\GenericoDAO;

class ActividadDAO extends GenericoDAO {

    public function __construct($cnn) {
        parent::__construct($cnn, 'actividad');
    }

    public function consultar() {
        $sql = "select * from actividad";
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }
    
     public function consultarActividad() {
        $sql = "select * from actividad where estado='Activo' order by id_actividad";
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $array = $sentencia->fetchAll();
        header('Content-Type:application/json');
        echo json_encode($array);
    }

    public function eliminarAc($id) {
        try {
            
            $sql = "update actividad set estado='Inactivo' where id_actividad = :id ";
            $sentencia = $this->cnn->prepare($sql);
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
            
        } catch (Exception $ex) {
            
        }
        
    }
    
    public  function modificar() {
        try {
            $sql = 'update actividad set nombre_actividad = :nombre, categoria = :categoria,disponibilidad=:disponibilidad where id_actividad = :id ';
            $sentencia = $this->cnn->prepare($sql);
            $sentencia->execute($_POST);
            $array['codigo'] = 1;
            $array['mensaje'] = 'Listo el pollo';
        } catch (Exception $ex) {
            $array['codigo'] = -1;
            $array['mensaje'] = 'Algo pasó';
        }
        header('Content-Type:application/json');
        echo json_encode($array);
    }


}