<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contenido
 *
 * @author Junior Miguel Castillo Santana
 */
class Contenido {

  private $referencia;
  private $fecha_alta;
  private $tipo;
  private $operacion;
  private $provincia;
  private $superficie;
  private $precio;
  private $imagen;
  private $vendedor;

  //, $fecha_alta, $tipo, $operacion, $provincia, $superficie, $precio, $imagen, $vendedor
  function __construct($idinmueble, $fecha_alta, $tipo, $operacion, $provincia, $superficie, $precio, $imagen, $vendedor) {
    $this->referencia = $idinmueble;
    $this->fecha_alta = $fecha_alta;
    $this->tipo = $tipo;
    $this->operacion = $operacion;
    $this->provincia = $provincia;
    $this->superficie = $superficie;
    $this->precio = $precio;
    $this->vendedor = $vendedor;
    $this->imagen = $imagen;
  
  }

  public function getId() {
    return $this->referencia;
  }

  public function getFechaAlta() {
    return $this->fecha_alta;
  }

  public function getTipo() {
    return $this->tipo;
  }

  public function getOperacion() {
    return $this->operacion;
  }

  public function getProvincia() {
    return $this->provincia;
  }

  public function getSuperficie() {
    return $this->superficie;
  }

  public function getVendedor() {
    return $this->vendedor;
  }

  public function getPrecio() {
    return $this->precio;
  }

  public function getImagen() {
    return $this->imagen;
  }

//Inserto una fila
  public function insert() {
    require_once 'conexion.php';
    $conexion = Inmobiliaria::conectar();
    $insercion = "INSERT INTO propiedad (Referencia, FechaAlta,Tipo,Operacion,Provincia ,Superficie,Precio,Vendedor,Imagen) "
            . "VALUES (\"" . $this->referencia . "\", \"" . $this->fecha_alta . "\", \"" . $this->tipo . "\", \"" . $this->operacion . "\", \"" . $this->provincia . "\", \"" . $this->superficie . "\", \"" . $this->precio . "\", \"" . $this->imagen . "\", \"" . $this->vendedor . "\")";

    echo $insercion;
   
    $conexion->exec($insercion);
  }

//Modifico el inmueble
  public function update() {
    require_once 'conexion.php';
    $conexion = Inmobiliaria::conectar();
    $modificacion = "UPDATE propiedad SET  Referencia=\"$this->referencia\",FechaAlta=\"$this->fecha_alta\",Tipo=\"$this->tipo\",Operacion=\"$this->operacion\",Provincia=\"$this->provincia \",Superficie=\"$this->superficie\",Precio=\"$this->precio\",Vendedor=\"$this->vendedor\" WHERE Referencia=\"$_POST[idModificar]\"";

    $conexion->exec($modificacion);
  }

//Borro las filas
  public function delete() {
    require_once 'conexion.php';
    $conexion = Inmobiliaria::conectar();
    $borrado = "DELETE FROM propiedad WHERE Referencia=" . $this->referencia;
    echo $borrado;
    $conexion->exec($borrado);
  }

//El get que muestra la lista de los inmueble
  public static function getListInmueble() {
    require_once 'conexion.php';
    $conexion = Inmobiliaria::conectar();
    $seleccion = "SELECT * FROM propiedad order by 1";
    $consulta = $conexion->query($seleccion);

    $listado = [];

    while ($registro = $consulta->fetchObject()) {
      $listado[] = new contenido($registro->Referencia, $registro->FechaAlta, $registro->Tipo, $registro->Operacion, $registro->Provincia, $registro->Superficie, $registro->Precio, $registro->Imagen, $registro->Vendedor);
    }
    return $listado;
  }

}
