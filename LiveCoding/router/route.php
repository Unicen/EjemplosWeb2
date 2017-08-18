<?php
  define('ACTION', 0);
  define('VALOR1', 1);
  define('VALOR2', 2);
  include_once 'config/ConfigApp.php';
  include_once 'index.php';
  include_once 'sumar.php';
  include_once 'about.php';
  include_once 'pi.php';

function parseURL($url)
{
  $urlExploded = explode('/', $url);
  $arrayReturn[ConfigApp::$ACTION] = $urlExploded[ACTION];
  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[VALOR1]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}
// 'about/juan'
// ["ACTION"=>'about', "PARAMS" => ['juan']]
// 'sumar/2/3'
// ["ACTION"=>'sumar',"PARAMS" => [2,3]]


  if(isset($_GET['action'])){
     $urlData = parseURL($_GET['action']);
      $action = $urlData[ConfigApp::$ACTION];
      if(array_key_exists($action,ConfigApp::$ACTIONS)){
          $params = $urlData[ConfigApp::$PARAMS];
          $metodo = ConfigApp::$ACTIONS[$action];
          if(isset($params) &&  $params != null){
              echo $metodo($params);
          }
          else{
              echo $metodo();
          }
      }
    //
    //  if($actions[ACTION] === 'sumar'){
    //     echo sumar($actions[VALOR1],$actions[VALOR2]);
    //   }
    // else{
    //   if($actions[ACTION] === 'about'){
    //       if(isset($actions[VALOR1])){
    //         echo about($actions[VALOR1]);
    //       }
    //       else{
    //         echo about();
    //       }
    //   }
    //   else{
    //     if($actions[ACTION] === 'pi'){
    //       echo piNumber();
    //     }
    //   }
    // }
  }

 ?>
