<?php
namespace persistencia\conexion;
use PDO;


class Conexion {
    public static function conectar(){
        $cnn= new PDO('pgsql: host=localhost; dbname=vituta','postgres', 'postgres');
        $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $cnn;
    }
}
