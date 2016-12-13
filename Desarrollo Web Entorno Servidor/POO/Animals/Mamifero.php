<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mamifero
 *
 * @author USER
 */
include_once 'Animal.php';

class Mamifero extends Animal {

  // atributos /////////////////////////////

  protected $tipo;
  protected $cantidadOjos;
  protected $cantidadPies;

////////////////// métodos //////////////////////////////////////////////
//////////////////// constructor ///////////////////////////
  function __construct($raza, $sexo, $edad) {
    parent::__construct($raza, $sexo, $edad);
    $this->tipo = "";
    $this->cantidadOjos = 0;
    $this->cantidadPies = 0;
  }

///////setter///////////////////////////////////////
  //pudes decir si es acuatico y terrestre 
  public function settipo($tipo) {
    $this->tipo = $tipo;
  }

  // dice cuantos pies tiene el mamiferos 
  public function setcantidadPies($numPie) {

    $this->cantidadPies = numPie;
  }

//////////////getter ////////////////////////////////
  //consulta cuantos pies tiene el mamifero
  public function getcantidadPies() {
    if (tipo . equals("terrestre")) {
      return $this->cantidadPies;
    }
    return 0;
  }

  // consulta si es acuatico o terrestre 
  public function gettipo() {
    return $this->tipo;
  }

}
