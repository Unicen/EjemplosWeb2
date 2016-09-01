<?php

class TareasModel
{
  private $tareas;
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=mvclista_tudai;charset=utf8', 'root', '');

    $this->tareas = ['Tarea 11','Tarea 21','Tarea 31'];
  }

  function getTareas(){
    $sentencia = $this->db->prepare( "select * from tarea");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    //return $this->tareas;
  }

  function crearTarea($tarea){
    //Agrega en la ultima posicion del arreglo
    $sentencia = $this->db->prepare("INSERT INTO tarea(nombre) VALUES(?)");
    $sentencia->execute(array($tarea));
    //$this->tareas[] = $tarea;
  }

  function eliminarTarea($id_tarea){
    //Elimina la '$id_tarea' del arreglo
    //tareas[0] = 'Tarea 11'
    //tareas[1] = 'Tarea 21'
    //tareas[2] = 'Tarea 11'
    //unset($this->tareas[$id_tarea]);
    $sentencia = $this->db->prepare("delete from tarea where id_tarea=?");
    $sentencia->execute(array($id_tarea));
  }

    function toogleTarea($id_tarea){
      $tarea = $this->getTarea($id_tarea);
      $sentencia = $this->db->prepare("update tarea set finalizada=? where id_tarea=?");
      $sentencia->execute(array(!$tarea['finalizada'],$id_tarea));
    }

    function getTarea($id_tarea){
      $sentencia = $this->db->prepare( "select * from tarea where id_tarea=?");
      $sentencia->execute(array($id_tarea));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
    }



}

?>
