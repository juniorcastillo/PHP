<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gato
 *
 * @author USER
 */
include_once 'Mamifero.php';

class Gato extends Mamifero {

  public $color;
  public $raza;
  public $sexo;
  public $edad;
  public $peso;

// métodos ///////////////////////////////
// constructor
  function __construct($raza, $sexo, $edad) {
    parent::__construct($raza, $sexo, $edad);
    $this->sexo = $sexo;
  }

// getter
  public function getSexo() {
    return this . sexo;
  }

  /**
   * Hace que el gato maulle
   */
  public function maulla() {
    echo ' 
    <audio controls>
   <source src="horse.ogg" type="audio/ogg">
    <source src="sonido/animals020.mp3" type="audio/mpeg">
   Your browser does not support the audio element.
    </audio>';
  }

  /**   * Hace que el gato ronronee
   */
  public function ronronea() {
    echo "mrrrrrr";
  }
  public function imagenGato() {
    echo '<img src="img/g1.jpg" alt="gato" height="62" width="62">';
  }
  /**
   * Hace que el gato coma.
   * A los gatos les gusta el pescado, si le damos otra comida
   * la rechazará.
   * 
   * @param comida la comida que se le ofrece al gato
   */
  
  public function come($comida) {
    if ($comida===("pescado")) {
      echo "Hmmmm, gracias";
    } else {
      echo"Lo siento, yo solo como pescado";
    }
  }

  /**
   * Pone a pelear dos gatos.
   * Solo se van a pelear dos machos entre sí.
   * 
   * @param contrincante es el gato contra el que pelear
   */
  public function peleaCon(Gato $contrincante) {
  if ($this->sexo===("hembra")) {
 echo("no me gusta pelear");
} else {
  if ($contrincante.getSexo()===("hembra")) {
    echo("no peleo contra gatitas");
  } else {
    echo("ven aquí que te vas a enterar");
  }
}
}

}
