<?php
require_once('controllers/TareasController.php');
require_once('controllers/LoginController.php');
require_once('config/ConfigApp.php');

$loginController = new LoginController();

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $loginController->login();
  die();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$ACTION_MOSTRAR_TAREAS:
    $controller = new TareasController($loginController);
    $controller->iniciar();
    break;
  case ConfigApp::$ACTION_GUARDAR_TAREA:
    $controller = new TareasController($loginController);
    $controller->guardar();
    break;
  case ConfigApp::$ACTION_ELIMINAR_TAREA:
    $controller = new TareasController($loginController);
    $controller->eliminar();
    break;
  case ConfigApp::$ACTION_REALIZAR_TAREA:
    $controller = new TareasController($loginController);
    $controller->realizar();
    break;
  case ConfigApp::$ACTION_LOGIN:
    $loginController->login();
    break;
  default:
    $controller = new TareasController($loginController);
    $controller->iniciar();
    break;
}
?>
