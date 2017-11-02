<?php
class TareasModel extends Model
{
  function getTareas(){
    $sentencia = $this->db->prepare( "select * from tarea");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function guardarTarea($titulo, $descripcion, $completada, $imagen){
    $destino_final = 'images/' . uniqid() . '.jpg';
    move_uploaded_file($imagen, $destino_final);
    $sentencia = $this->db->prepare('INSERT INTO tarea(titulo,descripcion,completado,imagen) VALUES(?,?,?,?)');
    $sentencia->execute([$titulo,$descripcion,$completada,$destino_final]);
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

}

 ?>
