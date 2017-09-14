<?php
include_once 'controller/TareasController.php';
$controllerTarea = new TareasController();

$controllerTarea->index();

  // define('ACTION', 0);
  // define('VALOR1', 1);
  // define('VALOR2', 2);
  // include_once 'config/ConfigApp.php';
  // include_once 'index.php';
  //
  //
  // function parseURL($url)
  // {
  //   $urlExploded = explode('/', $url);
  //   $arrayReturn[ConfigApp::$ACTION] = $urlExploded[ACTION];
  //   $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[VALOR1]) ? array_slice($urlExploded,1) : null;
  //   return $arrayReturn;
  // }
  // if(isset($_GET['action'])){
  //    $urlData = parseURL($_GET['action']);
  //     $action = $urlData[ConfigApp::$ACTION];
  //     if(array_key_exists($action,ConfigApp::$ACTIONS)){
  //         $params = $urlData[ConfigApp::$PARAMS];
  //         $metodo = ConfigApp::$ACTIONS[$action];
  //         if(isset($params) &&  $params != null){
  //             echo $metodo($params);
  //         }
  //         else{
  //             echo $metodo();
  //         }
  //     }
  // }

 ?>
