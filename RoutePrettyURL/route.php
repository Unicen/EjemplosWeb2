<?php
require_once ('controller/AboutController.php');
require_once ('controller/OperationsController.php');
require_once ('controller/ConstantsController.php');

$about_controller = new AboutController();
$operations_controller = new OperationsController();
$constants_controller = new ConstantsController();

if($_GET['action'] == ''){
    //no hay acción, hago la acción por defecto
    $about_controller->mostrar_about();
}
else{
    //parseo (separo) la URL
    $partesURL = explode ("/",$_GET['action']);
    //leo la URL para entender que tengo que hacer
    if($partesURL[0] === 'sumar') {
        $operations_controller->sumar($partesURL[1], $partesURL[2]);
    } elseif($partesURL[0] === 'pi') {
        $constants_controller->pi();
    } elseif($partesURL[0] === 'about') {
        if(isset($partesURL[1]) && $partesURL[1]=='juan'){
          $about_controller->mostrar_juan();
        }
        else {
          $about_controller->mostrar_about();
        }
    }
}
?>
