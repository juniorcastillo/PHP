<?php

/*
  Crea las clases Animal, Mamifero, Ave, Gato, Perro, Canario, Pinguino y Lagarto. Crea, al menos,
  tres métodos específicos de cada clase y redefine el/los método/s cuando sea necesario. Prueba las
  clases en un programa en el que se instancien objetos y se les apliquen métodos. Puedes aprovechar
  las capacidades que proporciona HTML y CSS para incluir imágenes, sonidos, animaciones, etc.
  para representar acciones de objetos; por ejemplo, si el canario canta, el perro ladra, o el ave vuela.
 */

/**
 * Description of Animal
 *
 * @author USER
 */
abstract class Animal {

  // atributos /////////////////////////////


  protected $raza;
  protected $sexo;
  protected $edad;

  // métodos ///////////////////////////////
  // constructor
  function __construct($raza, $sexo, $edad) {
    $this->raza = $raza;
    $this->sexo = $sexo;
    $this->edad = $edad;
  }

  // getter //consultar
  public function getsexo() {
    return $this->sexo;
  }

  public function getraza() {
    return $this->raza;
  }

  public function getedad() {
    return $this->edad;
  }

}
