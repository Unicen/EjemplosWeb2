<?php
function connect(){
  return new PDO('mysql:host=localhost;'
  .'dbname=db_tareas;charset=utf8'
  , 'root', '');
}

function markCompletedTarea($id_tarea)
{
  $db = connect();
  $sentencia = $db->prepare( "update tarea set completado=1 where id_tarea=?");
  return $sentencia->execute([$id_tarea]);
}

function deleteTarea($id_tarea)
{
  $db = connect();
  $sentencia = $db->prepare( "delete from tarea where id_tarea=?");
  return $sentencia->execute([$id_tarea]);
}

function getTareas()
{
  $db = connect();
  $sentencia = $db->prepare( "select * from tarea");
  $sentencia->execute();
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}

function insertTarea($titulo, $descripcion, $completado){
  $db = connect();
  $sentencia = $db->prepare('INSERT INTO tarea(titulo,descripcion,completado) VALUES(?,?,?)');
  $sentencia->execute([$titulo,$descripcion,$completado]);
}

 ?>
