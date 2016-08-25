<?php
require('views/TareasView.php');
require('models/TareasModel.php');

class TareasController
{
  private $vista;
  private $modelo;

  function __construct()
  {
    $this->modelo = new TareasModel();
    $this->vista = new TareasView();
  }

  function iniciar(){
    $tareas = $this->modelo->getTareas();
    $this->vista->mostrar($tareas);
  }



}

 ?>
