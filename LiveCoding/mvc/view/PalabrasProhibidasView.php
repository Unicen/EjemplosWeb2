<?php
include_once 'libs/Smarty.class.php';

class PalabrasProhibidasView
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
    $this->smarty->assign('titulo', 'MVC Tareas');
  }

  function mostrarPalabrasProhibidas($palabrasProhibidas){
    $this->smarty->assign('palabras_prohibidas', $palabrasProhibidas);
    $this->smarty->display('templates/PalabrasProhibidas/index.tpl');
  }

  // function mostrarCrearTareas(){
  //   $this->assignarTareaForm();
  //   $this->smarty->display('templates/formCrear.tpl');
  // }
}

 ?>
