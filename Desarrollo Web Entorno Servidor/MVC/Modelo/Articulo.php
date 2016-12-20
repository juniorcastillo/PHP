<?php

require_once 'blogDB.php';

class Articulo {

    private $id;
    private $titulo;
    private $fecha;
    private $contenido;
    private $meGusta;
    private $noMeGusta;

    function __construct($id, $titulo, $fecha, $contenido,$meGusta,$noMeGusta) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->fecha = $fecha;
        $this->contenido = $contenido;
        $this->meGusta = $meGusta;
        $this->noMeGusta = $noMeGusta;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getContenido() {
        return $this->contenido;
    }
    public function getMeGusta() {
        return $this->meGusta;
    }
    public function getNoMeGusta() {
        return $this->noMeGusta;
    }

    public function insert() {
        $conexion = blogDB::connectDB();
        $insercion = "INSERT INTO articulo (titulo, fecha, contenido, meGusta, noMeGusta) VALUES (\"" . $this->titulo . "\", \"" . $this->fecha . "\", \"" . $this->contenido . "\", \"" . $this->meGusta ."\", \"" . $this->noMeGusta . "\")";
        $conexion->exec($insercion);
    }

    public function delete() {
        $conexion = blogDB::connectDB();
        $borrado = "DELETE FROM articulo WHERE id=\"" . $this->id . "\"";
        $conexion->exec($borrado);
    }

    public function modifica() {
        $conexion = blogDB::connectDB();
        $actualizar = "UPDATE  articulo SET titulo=\"" . $this->titulo . "\", fecha=\"" . $this->fecha . "\", contenido=\"" . $this->contenido ."\" WHERE id=\"" . $this->id . "\"";
        $conexion->exec($actualizar);
    }
    public function meGusta($meGusta) {
        $conexion = blogDB::connectDB();
        $actualizar = "UPDATE  articulo SET  meGusta=\"" . $meGusta ."\" WHERE id=\"" . $this->id . "\"";
        echo $actualizar;
        
        $conexion->exec($actualizar);
    }
    public function noMeGusta($noMeGusta) {
        $conexion = blogDB::connectDB();
        $actualizar = "UPDATE  articulo SET  noMeGusta=\"" . $noMeGusta ."\" WHERE id=\"" . $this->id . "\"";
        echo $actualizar;
        
        $conexion->exec($actualizar);
    }

    public static function getArticulo() {
        $conexion = blogDB::connectDB();
        $seleccion = "SELECT * FROM articulo";
       
        $consulta = $conexion->query($seleccion);

        $articulo = [];

        while ($registro = $consulta->fetchObject()) {
            $articulo[] = new Articulo($registro->id, $registro->titulo, $registro->fecha, $registro->contenido,$registro->meGusta,$registro->noMeGusta);
        }

        return $articulo;
    }

    public static function getArticuloElegido($id) {
        $conexion = blogDB::connectDB();
        $seleccion = "SELECT id, titulo, fecha, contenido, meGusta, noMeGusta FROM articulo WHERE id=\"" . $id . "\"";
        $consulta = $conexion->query($seleccion);

        $articulo = [];

        while ($registro = $consulta->fetchObject()) {
            $articulo[] = new Articulo($registro->id, $registro->titulo, $registro->fecha, $registro->contenido,$registro->meGusta,$registro->noMeGusta);
        }

        return $articulo;
    }

}// cierre del class