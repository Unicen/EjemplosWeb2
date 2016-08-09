<?php
require('./libs/Smarty.class.php');
$smarty = new Smarty;

$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign("Nombre",array("Juan","Esther","Santiago","Teresa"));
$smarty->assign("Apellido",array("Perez","Psicores","Rodriguez","Estevanez"));

$smarty->display('index.tpl');
?>

