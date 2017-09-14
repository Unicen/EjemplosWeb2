<?php
include_once 'libs/Smarty.class.php';

class TareasView
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
    $this->smarty->assign('titulo', 'MVC Tareas');
  }

  function mostrarTareas($tareas){
    $this->smarty->assign('tareas', $tareas);
    $this->smarty->display('templates/index.tpl');
  }

  function mostrarCrearTareas(){
    $this->assignarTareaForm();
    $this->smarty->display('templates/formCrear.tpl');
  }

  function errorCrear($error, $titulo, $descripcion, $completada){
    $this->assignarTareaForm($titulo, $descripcion, $completada);
    $this->smarty->assign('error', $error);
    $this->smarty->display('templates/formCrear.tpl');
  }

  private function assignarTareaForm($titulo='', $descripcion='', $completada=0){
    $this->smarty->assign('titulo', $titulo);
    $this->smarty->assign('descripcion', $descripcion);
    $this->smarty->assign('completada', $completada);
  }

}

 ?>
