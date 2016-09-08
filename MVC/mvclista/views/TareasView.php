<?php
require('libs/Smarty.class.php');

class TareasView
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function agregarError($error){
    $this->smarty->assign('error',$error);
  }

  function mostrarMensaje($mensaje, $tipo){
    $this->smarty->assign('mensaje',$mensaje);
    $this->smarty->assign('tipoMensaje',$tipo);
  }

  function mostrar($tareas){
    $this->smarty->assign('tareas',$tareas);
    $this->smarty->display('index.tpl');
  }

  function getLista($tareas){
    $this->smarty->assign('tareas',$tareas);
    $this->smarty->display('lista.tpl');
  }

}



 ?>
