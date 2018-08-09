<?php

namespace persistencia\dao;
use PDO;

use persistencia\generico\GenericoDAO;

class PaquetePredeterminadoDAO extends GenericoDAO{
    public function __construct(&$cnn) {
        parent::__construct($cnn,'paquete_predeterminado');
    }
    
    public function consultar() {
        $sql='SELECT * FROM paquete_predeterminado';
        $sentencia=  $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado= $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
              
    }
    public function consultarId($condicion) {
        $sql='SELECT nombre_paquete,precio_persona FROM paquete_predeterminado where id_paquete_predeterminado='.$condicion;
        $sentencia=  $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado= $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
              
    }
     public function consultarPac() {
        $sql = 'SELECT pac.id_paquete_predeterminado,Ac.id_actividad,pac.nombre_paquete,Ac.nombre_actividad,Ac.duracion_aproximada,Ac.recomendacion,Ac.categoria,Ac.descripcion,pac.precio_persona
        FROM predeterminado_actividad As Pre
        JOIN actividad As Ac On pre.actividad_id_actividad=Ac.id_actividad
        JOIN paquete_predeterminado As pac ON pre.paquete_predeterminado_id_paquete_predeterminado=pac.id_paquete_predeterminado';
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();

        $array = $sentencia->fetchAll(PDO::FETCH_OBJ);
       return $array;
    }
    public function consultarPaquete($condicion) {
        $sql = 'SELECT pac.foto,pac.id_paquete_predeterminado,Ac.id_actividad,pac.nombre_paquete,Ac.nombre_actividad,Ac.duracion_aproximada,Ac.recomendacion,Ac.categoria,Ac.descripcion,pac.precio_persona,Ac.edad_recomendada
        FROM predeterminado_actividad As Pre
        JOIN actividad As Ac On pre.actividad_id_actividad=Ac.id_actividad
        JOIN paquete_predeterminado As pac ON pre.paquete_predeterminado_id_paquete_predeterminado=pac.id_paquete_predeterminado
		where pac.id_paquete_predeterminado='.$condicion;
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

}
