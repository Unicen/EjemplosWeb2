<?php

class TareasModel
{
  private $tareas;

  function __construct()
  {
    $this->tareas = ['Tarea 11','Tarea 21','Tarea 31'];
  }

  function getTareas(){
    return $this->tareas;
  }



}

?>
