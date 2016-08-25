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

  function crearTarea($tarea){
    //Agrega en la ultima posicion del arreglo
    $this->tareas[] = $tarea;
  }

  function eliminarTarea($index_tarea){
    //Elimina la 'index_tarea' del arreglo
    //tareas[0] = 'Tarea 11'
    //tareas[1] = 'Tarea 21'
    //tareas[2] = 'Tarea 11'
    unset($this->tareas[$index_tarea]);
  }



}

?>
