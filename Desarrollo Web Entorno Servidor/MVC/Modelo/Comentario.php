<?php

require_once 'blogDB.php';

class Comentario {

    private $codigoComent;
    private $fechaComent;
    private $comentario;
    private $articuloPerteneciente;
    private $comentPerteneciente;
    
    // $comentPerteneciente HACE REFERENCIA AL CODIGO DEL USUARIO QUE REALIZO EL COMENTARIO.
    
    function __construct($codigoComent, $fechaComent, $comentario, $articuloPerteneciente, $comentPerteneciente) {
        $this->codigoComent = $codigoComent;
        $this->fechaComent = $fechaComent;
        $this->comentario = $comentario;
        $this->articuloPerteneciente = $articuloPerteneciente;
        $this->comentPerteneciente = $comentPerteneciente;
    }

    public function getCodigoComent() {
        return $this->codigoComent;
    }

    public function getFechaComent() {
        return $this->fechaComent;
    }

    public function getComentario() {
        return $this->comentario;
    }

    public function getArticuloPerteneciente() {
        return $this->articuloPerteneciente;
    }

    public function getComentPerteneciente() {
        return $this->comentPerteneciente;
    }

    public function insert() {
        $conexion = blogDB::connectDB();
        $insercion = "INSERT INTO comentario ( fechaComent, comentario, articuloPerteneciente,comentPerteneciente) "
                . "VALUES (\"" . $this->fechaComent . "\", \"" . $this->comentario . "\", \"" . $this->articuloPerteneciente . "\", \"" . $this->comentPerteneciente . "\")";
        $conexion->exec($insercion);
    }

    public function delete() {
        $conexion = blogDB::connectDB();
        $borrado = "DELETE FROM comentario WHERE codigoComent=\"" . $this->codigoComent . "\"";
        $conexion->exec($borrado);
    }

    public function modificar() {
        $conexion = blogDB::connectDB();
        $actualizar = "UPDATE  comentario SET fechaComent=\"" . $this->fechaComent . "\", comentario=\"" . $this->comentario . "\" WHERE codigoComent=\"" . $this->codigoComent . "\"";
        $conexion->exec($actualizar);
    }

    public static function getComentarios($codigoArticuloPerteneciente) {
        $conexion = blogDB::connectDB();
        $seleccion = "SELECT codigoComent, fechaComent, comentario, articuloPerteneciente,comentPerteneciente  FROM comentario WHERE articuloPerteneciente=\"" . $codigoArticuloPerteneciente . "\"";
        $consulta = $conexion->query($seleccion);

        $arraycomentario = [];

        while ($registro = $consulta->fetchObject()) {
            $arraycomentario[] = new Comentario($registro->codigoComent, $registro->fechaComent, $registro->comentario, $registro->articuloPerteneciente, $registro->comentPerteneciente);
        }

        return $arraycomentario;
    }

    public static function getUsuario() {
        $conexion = blogDB::connectDB();
        $seleccion = "SELECT nomUsuario from usuario inner join comentario on usuario.codigoUsuario= comentario.comentPerteneciente\"\"";
        $consulta = $conexion->query($seleccion);

        $arraycomentario = [];

        while ($registro = $consulta->fetchObject()) {
            $arraycomentario[] = new Usuario($registro->nomUusario);
        }

        return $arraycomentario;
    }

    /* prueba para controlar si existen o no comentarios en un articulo en concreto
      public static function getExisteComentario($identificacion) {
      $conexion = blogDB::connectDB();
      $seleccion = "select count(codigoComent)from comentario inner join articulo on comentario.articuloPerteneciente = articulo.id\"\"";
      $consulta = $conexion->query($seleccion);

      $arraycomentario = [];

      while ($registro = $consulta->fetchObject()) {
      $arraycomentario[] = new Usuario($registro->nomUusario);
      }

      return $arraycomentario;
      }
     * 
     */
    /*
      public static function getComentarioById($id) {
      $conexion = blogDB::connectDB();
      $seleccion = "SELECT codigoComent, fechaComent, comentario, articuloPerteneciente FROM comentario WHERE id=\"".$id."\"";
      $consulta = $conexion->query($seleccion);
      $registro = $consulta->fetchObject();
      $arraycomentario = new Comentario($registro->codigoComent, $registro->fechaComent, $registro->comentario, $registro->articuloPerteneciente);

      return $arraycomentario;
      }
     */
}

// cierre del class
