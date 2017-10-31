<?php

class PalabrasProhibidasModel extends Model
{
  function getPalabrasProhibidas(){
    $sentencia = $this->db->prepare("select * from palabra_prohibida");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function guardarPalabraProhibida($palabra){
    $sentencia = $this->db->prepare('INSERT INTO palabra_prohibida(palabra) VALUES(?)');
    $sentencia->execute([$palabra]);
  }

  function borrarPalabraProhibida($id_palabra_prohibida){
    $sentencia = $this->db->prepare( "delete from palabra_prohibida where id_palabra_prohibida=?");
    $sentencia->execute([$id_palabra_prohibida]);
  }

}
?>
