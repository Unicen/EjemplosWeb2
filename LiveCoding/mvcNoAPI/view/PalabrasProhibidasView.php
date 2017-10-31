<?php
class PalabrasProhibidasView extends View
{
  function mostrarPalabrasProhibidas($palabrasProhibidas){
    $this->smarty->assign('palabras_prohibidas', $palabrasProhibidas);
    $this->smarty->display('templates/PalabrasProhibidas/index.tpl');
  }

  function mostrarCrearPalabraProhibida(){
    $this->smarty->display('templates/PalabrasProhibidas/formCrear.tpl');
  }
}

 ?>
