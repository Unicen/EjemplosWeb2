<?php
require_once ('libraries/About.php');
require_once ('libraries/Operations.php');
require_once ('libraries/Constants.php');

if($_GET['action'] == ''){
    //no hay acción, hago la acción por defecto
    mostrar_about();
}
else{
    //parseo (separo) la URL
    $partesURL = explode ("/",$_GET['action']);
    //leo la URL para entender que tengo que hacer
    if($partesURL[0] === 'sumar') {
        sumar(array($partesURL[1], $partesURL[2]));
    } elseif($partesURL[0] === 'pi') {
        number_pi();
    } elseif($partesURL[0] === 'about') {
        if(isset($partesURL[1]) && $partesURL[1]=='juan'){
          mostrar_juan();
        }
        else {
          mostrar_about();
        }
    }
}
?>
