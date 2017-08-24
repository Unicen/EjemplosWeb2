<?php
function connect(){
  return new PDO('mysql:host=localhost;'
  .'dbname=db_tareas;charset=utf8'
  , 'root', '');
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
