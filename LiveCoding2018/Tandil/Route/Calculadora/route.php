<?php

require_once "about.php";
require_once "sumar.php";
require_once "pi\pi.php";

if ($_GET['action'] == '') {
  About();
}else {
  $partesURL = explode('/', $_GET['action']);

  if($partesURL[0] === 'sumar'){
    Sumar($partesURL[1], $partesURL[2]);
  }elseif ($partesURL[0] === 'pi') {
    MostrarPi();
  }elseif ($partesURL[0] === 'about') {
    if(isset($partesURL[1]) && $partesURL[1] == 'javi'){
      AboutPersonalizado($partesURL[1]);
    }else{
      About();
    }
  }
}

 ?>
