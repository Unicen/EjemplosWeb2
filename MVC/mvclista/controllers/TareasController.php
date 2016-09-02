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

  function guardar(){
    $tarea = $_POST['tarea'];
    if(!$this->filtro($tarea)){
      $this->modelo->crearTarea($tarea);
    }
    $tareas = $this->modelo->getTareas();
    $this->vista->getLista($tareas);
  }

  function eliminar(){
    $key = $_GET['id_tarea'];
    $this->modelo->eliminarTarea($key);
    $tareas = $this->modelo->getTareas();
    $this->vista->getLista($tareas);
  }

  function realizar(){
    $key = $_GET['id_tarea'];
    $this->modelo->toogleTarea($key);
    $this->iniciar();
  }

  function filtro($tarea){
    return preg_match('/podria/',$tarea);
  }


}

 ?>
