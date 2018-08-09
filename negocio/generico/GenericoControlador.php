<?php

namespace negocio\generico;

abstract class GenericoControlador {

    /**
     *
     * @var \PDO 
     */
    protected $cnn;

    public function __construct(&$cnn) {
        $this->cnn = $cnn;
        
        session_start();
    }

    protected function validarSesion() {
        if (!isset($_SESSION['usuario']) || is_null($_SESSION['usuario'])) {
            session_destroy();
            header('Location:' . RUTA_PRINCIPAL);
        }
    }
/*
    protected function validarSesion($rol) {
        if (!isset($_SESSION['propietario']) || is_null($_SESSION['propietario'])) {
            session_destroy();
            header('Location:' . RUTA_PRINCIPAL);
        }
        if ($_SESSION['propietario']['rol'] != $rol) {
            session_destroy();
            header('Location:' . RUTA_PRINCIPAL);
        }
    }*/

}
