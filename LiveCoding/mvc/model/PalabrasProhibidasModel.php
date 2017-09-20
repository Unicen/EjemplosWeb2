<?php

class PalabrasProhibidasModel
{
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_tareas;charset=utf8'
    , 'root', '');
  }

  function getPalabrasProhibidas(){
    $sentencia = $this->db->prepare("select * from palabra_prohibida");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function guardarPalabraProhibida($palabra){
    $sentencia = $this->db->prepare('INSERT INTO palabra_prohibida(palabra) VALUES(?)');
    $sentencia->execute([$palabra]);
  }

}

 ?>
