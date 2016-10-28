<?php
require_once('controllers/TareasController.php');
require_once('controllers/LoginController.php');
require_once('config/ConfigApp.php');

$loginController = new LoginController();
$controller = new TareasController($loginController);

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  (new LoginController())->login();
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
  case ConfigApp::$ACTION_LOGIN:
    $loginController->login();
    break;
  default:
    $controller->iniciar();
    break;
}
?>
