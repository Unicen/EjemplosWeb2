<?php
require_once ('libraries/About.php');
require_once ('libraries/Operations.php');
require_once ('libraries/Constants.php');

$ACTIONS = [
    'home' =>  "mostrar_about",
    'about' =>  "mostrar_about_by_name",
    'pi' =>  "number_pi",
    'sumar' =>  "sumar"
];

function parseUrl($url){
  $arr_data = explode ("/",$url);
  // Se guarda el nombre de la accion
  $arrayReturn["action"] = $arr_data[0];
  // Se guarda la lista de parametros como un array
  $arrayReturn["params"] = isset($arr_data[1]) ? array_slice($arr_data, 1) : null;

  return $arrayReturn;
}

// Parsear la URL para identificar Actions y Parametros
$urlData = parseUrl($_GET["action"]);
// Nombre de la Accion a ejecutar
$actionName = $urlData["action"];

if (array_key_exists($actionName,$ACTIONS)){
    $params = $urlData["params"];
    $methodName = $ACTIONS[$actionName];

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
