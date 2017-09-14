<?php

class TareasModel
{
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_tareas;charset=utf8'
    , 'root', '');
  }

  function getTareas(){
    $sentencia = $this->db->prepare( "select * from tarea");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function guardarTarea($titulo, $descripcion, $completada){
    $sentencia = $this->db->prepare('INSERT INTO tarea(titulo,descripcion,completado) VALUES(?,?,?)');
    $sentencia->execute([$titulo,$descripcion,$completada]);
  }

}

 ?>
