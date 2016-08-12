<?php
  $i=90000;
  while ($i>0){
    $i--;
  }
  if(isset($_POST["nombre"]) && isset($_POST["mail"])
  && $_POST["nombre"]!="" && $_POST["mail"]!=""){
      $nombre = $_POST["nombre"];
      $mail = $_POST["mail"];
      echo "<h1>El nombre es: $nombre</h1>";
      echo "El Email es: $mail";
  }
  else{
      echo "Introduzca Nombre y Mail";
  }
 ?>
