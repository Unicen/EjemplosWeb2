<?php
class UsuariosModel extends Model
{
  function getUser($userName){
    $sentencia = $this->db->prepare( "select * from usuario where usuario = ? limit 1");
    $sentencia->execute([$userName]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
//
//   function guardarTarea($titulo, $descripcion, $completada){
//     $sentencia = $this->db->prepare('INSERT INTO tarea(titulo,descripcion,completado) VALUES(?,?,?)');
//     $sentencia->execute([$titulo,$descripcion,$completada]);
//   }
//
//   function borrarTarea($id_tarea){
//     $sentencia = $this->db->prepare( "delete from tarea where id_tarea=?");
//     $sentencia->execute([$id_tarea]);
//   }
//
//   function finalizarTarea($id_tarea)
//   {
//     $sentencia = $this->db->prepare( "update tarea set completado=1 where id_tarea=?");
//     $sentencia->execute([$id_tarea]);
//   }

}

 ?>
