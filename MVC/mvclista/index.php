<?php
require('controllers/TareasController.php');
require ('config/ConfigApp.php');

$controller = new TareasController();

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)
|| $_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_MOSTRAR_TAREAS){
  $controller->iniciar();
}
else {
  if($_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_GUARDAR_TAREA){
    $controller->guardar();
  }
  else {
    if($_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_ELIMINAR_TAREA){
      $controller->eliminar();
    }
  }
}
?>
