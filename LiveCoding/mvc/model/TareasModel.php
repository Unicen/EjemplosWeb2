<?php
class TareasModel extends Model
{
  function getTareas(){
    $sentencia = $this->db->prepare( "select * from tarea");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }


  function getTarea($id_tarea){
    $sentencia = $this->db->prepare( "select * from tarea where id_tarea = ?");
    $sentencia->execute([$id_tarea]);
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function guardarTarea($titulo, $descripcion, $completada){
    $sentencia = $this->db->prepare('INSERT INTO tarea(titulo,descripcion,completado) VALUES(?,?,?)');
    $sentencia->execute([$titulo,$descripcion,$completada]);
    $id = $this->db->lastInsertId();
    return $this->getTarea($id);
  }

  function borrarTarea($id_tarea){
    $sentencia = $this->db->prepare( "delete from tarea where id_tarea=?");
    $sentencia->execute([$id_tarea]);
  }

  function finalizarTarea($id_tarea)
  {
    $sentencia = $this->db->prepare( "update tarea set completado=1 where id_tarea=?");
    $sentencia->execute([$id_tarea]);
  }

  function modificarTarea($id_tarea, $titulo, $descripcion, $completada)
  {
    $sentencia = $this->db->prepare( "update tarea set titulo=?, descripcion=?, completado=? where id_tarea=?");
    $sentencia->execute([$titulo, $descripcion, $completada, $id_tarea]);
    return $this->getTarea($id_tarea);
  }

}

 ?>
