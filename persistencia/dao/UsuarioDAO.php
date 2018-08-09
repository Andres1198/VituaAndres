<?php

namespace persistencia\dao;

use persistencia\generico\GenericoDAO;
use persistencia\vo\UsuarioVO;

class UsuarioDAO extends GenericoDAO {

    public function __construct($cnn) {
        parent::__construct($cnn, 'usuario');
    }

    public function autenticar($correo, $clave) {
        $sql = "select * from usuario where correo = :correo AND clave = :clave ";
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->bindParam(':correo', $correo);
        $sentencia->bindParam(':clave', $clave);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();
        if (empty($resultado)) {
            return;
        }
        $registro = $resultado[0];
        $usuario = new UsuarioVO();
        $usuario->setId_usuario($registro['id_usuario']);
        $usuario->setNombre($registro['nombre']);
        $usuario->setApellido($registro['apellido']);
        $usuario->setCorreo($registro['correo']);
        $usuario->setGenero($registro['genero']);
        $usuario->setClave($registro['clave']);
        $usuario->setTelefono($registro['telefono']);
        $usuario->setTipo_documento($registro['tipo_documento']);
        $usuario->setNumero_documento($registro['numero_documento']);
        $usuario->setRoll($registro['rol']);
        $_COOKIE['usuario']= $usuario->getRoll();
        $_SESSION['id_usuario'] = $registro['id_usuario'];
        $_SESSION['rol'] = $registro['rol'];
        return $usuario;
    }

    public function consultar() {
        $sql = "select * from usuario";
        $sql = $this->cnn->prepare($sql);
        $resultado = $sql->execute();
        return $resultado;
    }

}
