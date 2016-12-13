<?php

class Vehiculo {
  // Variables de clase
  private static $kilometros_Totales = 0;
  private static $carros= 0;
  
  // Variables 
  private $KilometrosRodados;
  
  //Metodos
  
  public static function getVehiculosCreados() {
    return Vehiculo::$carros;
  }
  
  public static function getkilometros_Totales() {
    return Vehiculo::$kilometros_Totales;
  }

  // Métodos de instancia
  public function __construct() {
    Vehiculo::$carros++;
    $this->KilometrosRodados = 0;
  }

  public function getKilometrosRodados() {
    return $this->KilometrosRodados;
  }
  
  public function recorre($kilometros) {
    $this->KilometrosRodados += $kilometros;
    Vehiculo::$kilometros_Totales += $kilometros;
  }
}
