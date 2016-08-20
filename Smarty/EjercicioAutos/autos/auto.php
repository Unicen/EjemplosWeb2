<?php

class Auto
{
  public $marca;
  public $modelo;
  public $puertas;
  public $motor;
  public $origen;
  public $color;
  public $precio;

  function __construct($marca, $modelo, $puertas, $motor, $origen, $color, $precio)
  {
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->puertas = $puertas;
    $this->motor = $motor;
    $this->origen = $origen;
    $this->color = $color;
    $this->precio = $precio;
  }
}

 ?>
