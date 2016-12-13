<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Canario
 *
 * @author USER
 */
include_once 'Ave.php';

class Canario extends Ave {

  private $altura=0;

// métodos ///////////////////////////////
// constructor
  function __construct($raza, $sexo, $edad, $colorPluma, $altura) {
    parent::__construct($raza, $sexo,$edad, $colorPluma);
    $this->altura = $altura;
  }

// getter
  public function getSexo() {
    return this . sexo;
  }

  /**
   * Hace  que el canario cante
   */
  public function cantaCanario() {
    echo("pipipipipipi");
  }

  /**
   * creo que he visto a un lindo gatito 
   */
  public function verGato() {
   echo('<img src="img/gato_VS_ave.jpg" alt="Canario" height="62" width="62"><b> Creo que he visto a un lindo gatito</b>');
  }

  /**
   * Hace que el cannario vuele.
   * vuela la altura que le pongas 
   * @param 
   */
  public function getaltura($altura) {
    $this->altura = $altura;
    return $this->altura;
  }
   public function imagenCanario() {
    echo '<img src="img/canario1.jpg" alt="Canario" height="62" width="62">';
  }
// hace volar a canario
  public function volar() {
  
    echo "Estoy volando mirame lo alto que estoy: " . $this->altura ;
  }

}
