<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ave
 *
 * @author USER
 */
include_once 'Animal.php';

class Ave extends Animal {

// atributos /////////////////////////////

  protected $colorPluma;
  protected $tamano;

////////////////// métodos //////////////////////////////////////////////
//////////////////// constructor ///////////////////////////
  function __construct($raza, $sexo, $edad, $colorPluma) {
    parent::__construct($raza, $sexo, $edad);
    $this->colorPluma = $colorPluma;

  }

  ///////setter///////////////////////////////////////
  // cambia el color de la pluma
  public function setcolorPluma($color) {

    $this->$colorPluma = $color;
  }
// modifica el tamaño de tu ave 
  public function settamano($tamano) {
     $this->tamano=$tamano;
  }
  
//////////////getter ////////////////////////////////
  
  // consulta el tamaño del ave 
  public function gettamano() {
    return $this->tamano;
  }
  //consuulta el color de pluma que tiene el ave
   
 protected  function getcolorPluma() {
    return $this->colorPluma;
  }  
  
  public function __toString(){
    $caracteristicas= "Este  es el tamaño del ave -> " + $this->tamano + " Y este es su color de pluma " + $this->colorPluma;
    
    return $caracteristicas;
  }
}
