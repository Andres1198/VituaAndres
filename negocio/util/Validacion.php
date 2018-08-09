<?php

namespace negocio\util;

use negocio\excepcion\VitutaExcepcion;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Validacion
 *
 * @author Usuario
 */
class Validacion {

    public static function obligatorio($valor, $mensaje) {
        if (empty($valor)) {
            throw new VitutaExcepcion($mensaje);
        }
    }

}
