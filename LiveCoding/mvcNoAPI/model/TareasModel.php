<?php
class TareasModel extends Model
{
  function getTareas(){
    $tareasImagenes = [];
    $sentencia = $this->db->prepare( "select * from tarea");
    $sentencia->execute();
    $tareas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    foreach ($tareas as $tarea) {
      //$tarea tiene id_tarea, titulo, descripcion, completado
      $sentencia_imagenes = $this->db->prepare( "select * from imagen where fk_id_tarea=?");
      $sentencia_imagenes->execute([$tarea['id_tarea']]);
      $imagenes = $sentencia_imagenes->fetchAll(PDO::FETCH_ASSOC);
      //imagenes tiene [[id_imagen, ruta],[id_imagen, ruta], [id_imagen, ruta]]
      $tarea['imagenes'] = $imagenes;
      //tarea va a agregar la key 'imagenes', entonces tiene
      //tiene id_tarea, titulo, descripcion, completado, imagenes(arreglo)
      $tareasImagenes[] = $tarea;
    }

    return $tareasImagenes;
  }

  private function subirImagenes($imagenes){
    $rutas = [];
    foreach ($imagenes as $imagen) {
      $destino_final = 'images/' . uniqid() . '.jpg';
      move_uploaded_file($imagen, $destino_final);
      $rutas[]=$destino_final;
    }
    return $rutas;
  }

  function guardarTarea($titulo, $descripcion, $completada, $imagenes){
    $sentencia = $this->db->prepare('INSERT INTO tarea(titulo,descripcion,completado) VALUES(?,?,?)');
    $sentencia->execute([$titulo,$descripcion,$completada]);
    $id_tarea = $this->db->lastInsertId();
    $rutas = $this->subirImagenes($imagenes);
    $sentencia_imagenes = $this->db->prepare('INSERT INTO imagen(fk_id_tarea,ruta) VALUES(?,?)');
    foreach ($rutas as $ruta) {
      $sentencia_imagenes->execute([$id_tarea,$ruta]);
    }
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
