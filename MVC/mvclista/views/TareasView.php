<?php
require('libs/Smarty.class.php');

class TareasView
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function mostrar($tareas){
    $this->smarty->assign('tareas',$tareas);
    $this->smarty->display('lista.tpl');
  }
}



 ?>
