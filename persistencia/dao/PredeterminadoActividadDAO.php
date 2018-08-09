<?php

namespace persistencia\dao;

use PDO;
use persistencia\generico\GenericoDAO;

class PredeterminadoActividadDAO extends GenericoDAO {

    public function __construct(&$cnn) {
        parent::__construct($cnn, 'predeterminado_actividad');
    }

    public function consultar() {
        $sql = 'SELECT	id_actividad,nombre_Actividad,(select MAX(id_paquete_predeterminado) FROM paquete_predeterminado) as id_paquete_predeterminado
		FROM actividad ';
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

    public function consultarPaquete() {
        $sql = 'SELECT pac.id_paquete_predeterminado,Ac.id_actividad,pac.nombre_paquete,Ac.nombre_actividad,Ac.duracion_aproximada,Ac.recomendacion,Ac.categoria,Ac.descripcion,pac.precio_persona
        FROM predeterminado_actividad As Pre
        JOIN actividad As Ac On pre.actividad_id_actividad=Ac.id_actividad
        JOIN paquete_predeterminado As pac ON pre.paquete_predeterminado_id_paquete_predeterminado=pac.id_paquete_predeterminado';
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();

        $array = $sentencia->fetchAll();
        header('Content-Type:application/json');
        echo json_encode($array);
        return $array;
    }
   

    public function eliminarRow() {
        try {
            $id = $_POST['id'];
            
            
            $sql = 'delete from predeterminado_actividad where paquete_predeterminado_id_paquete_predeterminado = :id';
            $sentencia = $this->cnn->prepare($sql);
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
            $array['codigo'] = 1;
            $array['mensaje'] = 'Se elimino con exito';
        } catch (Exception $ex) {
            $array['codigo'] = -1;
            $array['mensaje'] = 'Algo pasó';
        }
        header('Content-Type:application/json');
    echo json_encode($array);
    
        }
        
        function modificar() {
            try {
                $sql = 'update paquete_predeterminado set nombre_paquete = :nombre, precio_persona = :precio where id_paquete_predeterminado = :id ';

                $sentencia = $this->cnn->prepare($sql);
                $sentencia->execute($_POST);
                $array['codigo'] = 1;
                $array['mensaje'] = 'Los datos se modificaron con èxito';
            } catch (Exception $ex) {
                $array['codigo'] = -1;
                $array['mensaje'] = 'Algo pasó';
            }
            header('Content-Type:application/json');
            echo json_encode($array);
        }

    }
    