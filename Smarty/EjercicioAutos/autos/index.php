<?php
require('libs/Smarty.class.php');
require('auto.php');
//Crear un array de autos con Marca, modelo y 4 propiedades aleatorias.
$cars[] = new Auto("Ford", "2008", "5", "2.0", "Brasil","Rojo",340000);
$cars[] = new Auto("Fiat", "2012", "3", "1.0", "Brasil","Negro",250000);
$cars[] = new Auto("VW", "2015", "5", "2.2", "Alemania","Azul",450000);
$cars[] = new Auto("Chevrolet", "2016", "3", "4.0", "USA","Amarillo",1500000);
//Mostrar los datos en forma de listas y de tabla en dos plantillas diferentes.
$smarty = new Smarty;
$smarty->assign('cars',$cars);
$smarty->display('tablaAutos.tpl');
?>
