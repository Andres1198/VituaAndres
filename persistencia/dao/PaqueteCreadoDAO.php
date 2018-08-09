<?php

namespace persistencia\dao;

use persistencia\generico\GenericoDAO;

class PaqueteCreadoDAO extends GenericoDAO {

    public function __construct($cnn) {
        parent::__construct($cnn, 'paquete_creado');
    }
}