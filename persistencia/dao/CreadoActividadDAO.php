<?php

namespace persistencia\dao;

use persistencia\generico\GenericoDAO;

class CreadoActividadDAO extends GenericoDAO {

    public function __construct($cnn) {
        parent::__construct($cnn, 'creado_actividad');
    }

}
