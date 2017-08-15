<?php
require_once ('libraries/About.php');
require_once ('libraries/Operations.php');
require_once ('libraries/Constants.php');
require_once ('config/ConfigApp.php');

function parseUrl($url){
  $arr_data = explode ("/",$url);
  // Se guarda el nombre de la accion
  $arrayReturn[ConfigApp::$ACTION] = $arr_data[0];
  // Se guarda la lista de parametros como un array
  $arrayReturn[ConfigApp::$PARAMS] = isset($arr_data[1]) ? array_slice($arr_data, 1) : null;

  return $arrayReturn;
}

// Parsear la URL para identificar Actions y Parametros
$urlData = parseUrl($_GET[ConfigApp::$ACTION]);
// Nombre de la Accion a ejecutar
$actionName = $urlData[ConfigApp::$ACTION];

if (array_key_exists($actionName,ConfigApp::$ACTIONS)){
    $params = $urlData[ConfigApp::$PARAMS];
    $methodName = ConfigApp::$ACTIONS[$actionName];

    if(isset($params) && $params != null){
      // Invocar el metodo con el array de parametros
      $methodName($params);
    } else {
      $methodName();
    }
} else {
    // No existe la Action entonces muestro la Home
    mostrar_about();
}
 ?>
