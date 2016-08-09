<?php
require('./libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign("Nombre","Ignacio Jonas");
$smarty->display('index.tpl');
?>
