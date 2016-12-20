<?php

require_once 'blogDB.php';

class Usuario {

    private $codigoUsuario;
    private $nomUsuario;
    private $apellUsuario;
    private $nomAcceso;
    private $contraseñaUsuario;
    private $mailUsuario;

    function __construct($codigoUsuario, $nomUsuario, $apellUsuario, $nomAcceso, $contraseñaUsuario, $mailUsuario) {
        $this->codigoUsuario = $codigoUsuario;
        $this->nomUsuario = $nomUsuario;
        $this->apellUsuario = $apellUsuario;
        $this->nomAcceso = $nomAcceso;
        $this->contraseñaUsuario = $contraseñaUsuario;
        $this->mailUsuario = $mailUsuario;
    }

    public function getCodigoUsuario() {
        return $this->codigoUsuario;
    }

    public function getNomUsuario() {
        return $this->nomUsuario;
    }

    public function getApellUsuario() {
        return $this->apellUsuario;
    }

    public function getNomAcceso() {
        return $this->nomAcceso;
    }

    public function getContraseñaUsuario() {
        return $this->contraseñaUsuario;
    }

    public function getMailUsuario() {
        return $this->mailUsuario;
    }

    public function insert() {
        $conexion = blogDB::connectDB();
        $insercion = "INSERT INTO usuario ( nomUsuario, apellUsuario, nomAcceso,contraseñaUsuario,mailUsuario) VALUES (\"" . $this->nomUsuario . "\", \"" . $this->apellUsuario . "\", \"" . $this->nomAcceso . "\", \"" . $this->contraseñaUsuario . "\", \"" . $this->mailUsuario . "\")";
        $conexion->exec($insercion);
    }

    public function delete() {
        $conexion = blogDB::connectDB();
        $borrado = "DELETE FROM usuario WHERE codigoUsuario=\"" . $this->codigoUsuario . "\"";
        $conexion->exec($borrado);
    }

    public function modificar() {
        $conexion = blogDB::connectDB();
        $actualizar = "UPDATE  usuario SET contraseñaUsuario=\"" . $this->contraseñaUsuario . "\", mailUsuario=\"" . $this->mailUsuario . "\" WHERE codigoUsuario=\"" . $this->codigoUsuario . "\"";
        $conexion->exec($actualizar);
    }

    public static function getUsuarios() {
        $conexion = blogDB::connectDB();
        $seleccion = "SELECT codigoUsuario, nomUsuario, apellUsuario,nomAcceso, contraseñaUsuario, mailUsuario FROM usuario";
        $consulta = $conexion->query($seleccion);

        $arrayusuario = [];

        while ($registro = $consulta->fetchObject()) {
            $arrayusuario[] = new Usuario($registro->codigoUsuario, $registro->nomUsuario, $registro->apellUsuario, $registro->nomAcceso, $registro->contraseñaUsuario, $registro->mailUsuario);
        }

        return $arrayusuario;
    }

}
