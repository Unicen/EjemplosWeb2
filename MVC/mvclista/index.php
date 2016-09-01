<?php
require('controllers/TareasController.php');
require ('config/ConfigApp.php');

$controller = new TareasController();

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $controller->iniciar();
  die();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$ACTION_MOSTRAR_TAREAS:
    $controller->iniciar();
    break;
  case ConfigApp::$ACTION_GUARDAR_TAREA:
    $controller->guardar();
    break;
  case ConfigApp::$ACTION_ELIMINAR_TAREA:
    $controller->eliminar();
    break;
  case ConfigApp::$ACTION_REALIZAR_TAREA:
    $controller->realizar();
    break;
  default:
    $controller->iniciar();
    break;
}
?>
