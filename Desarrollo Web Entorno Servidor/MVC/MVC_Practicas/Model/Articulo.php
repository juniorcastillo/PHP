<?php

require_once 'BlogDB.php';

class Articulo {
  private $id;
  private $titulo;
  private $fecha;
  private $contenido;
  
  function __construct($id, $titulo, $fecha, $contenido) {
    $this->id = $id;
    $this->titulo = $titulo;
    $this->fecha = $fecha;
    $this->contenido = $contenido;
  }

  function getId() {
    return $this->id;
  }

  function getTitulo() {
    return $this->titulo;
  }

  function getFecha() {
    return $this->fecha;
  }

  function getContenido() {
    return $this->contenido;
  }
  
  public static function getArticulos(){
    $conexion = BlogDB::connectDB();
    $seleccion = "SELECT id, titulo, fecha, contenido FROM articulo order by fecha ASC";
    $consulta = $conexion->query($seleccion);
    
    $articulos = [];
    
    while ($registro = $consulta->fetchObject()) {
      $articulos[] = new Articulo($registro->id, $registro->titulo, $registro->fecha, $registro->contenido);
    }
    
    return $articulos;
  }
  
  public static function getOfertaById($idArt) {
    $conexion = BlogDB::connectDB();
    $seleccion = "SELECT id, titulo, fecha, contenido FROM articulo WHERE id=\"".$idArt."\"";
    $consulta = $conexion->query($seleccion);
    $registro = $consulta->fetchObject();
    $articuloId = new Articulo($registro->id, $registro->titulo, $registro->fecha, $registro->contenido);
       
    return $articuloId;    
  }
  public function insert(){
    $conexion = BlogDB::connectDB();
    $insercion = "INSERT INTO articulo (titulo, fecha, contenido) VALUES (\"".$this->titulo."\", \"".$this->fecha."\", \"".$this->contenido."\")";
    $conexion->exec($insercion);
  }
  
  public function delete(){
    $conexion = BlogDB::connectDB();
    $borrado = "DELETE FROM articulo WHERE id=\"".$this->id."\"";
    $conexion->exec($borrado);
  }
  
  public function update(){
    $conexion = BlogDB::connectDB();
    $actualizacion = "UPDATE articulo SET titulo=\"".$this->titulo."\", contenido=\"".$this->contenido."\" WHERE id=\"".$this->id."\"";
    $conexion->exec($actualizacion);
  }
}
