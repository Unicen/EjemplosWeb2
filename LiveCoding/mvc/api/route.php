<?php
define('RESOURCE', 0);
define('PARAMS', 1);

include_once 'config/ConfigApi.php';
include_once 'TareasApi.php';

function parseURL($url)
{
  $urlExploded = explode('/', $url);
  $arrayReturn[ConfigApi::$RESOURCE] = $urlExploded[RESOURCE] . '#' . $_SERVER['REQUEST_METHOD'];
  $arrayReturn[ConfigApi::$PARAMS] = isset($urlExploded[PARAMS]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}

if(isset($_GET['resource'])){
    $urlData = parseURL($_GET['resource']);
    $resource = $urlData[ConfigApi::$RESOURCE];
    if(array_key_exists($resource,ConfigApi::$RESOURCES)){
        $params = $urlData[ConfigApi::$PARAMS];
        $action = explode('#',ConfigApi::$RESOURCES[$resource]);
        $controller =  new $action[0]();
        $method = $action[1];
        if(!empty($params)){
            echo $controller->$method($params);
        }
        else{
            echo $controller->$method();
        }
    }
}

 ?>
