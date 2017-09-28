<?php
include_once('model/PalabrasProhibidasModel.php');
include_once('view/PalabrasProhibidasView.php');

class PalabrasProhibidasController extends SecuredController
{
  function __construct()
  {
    parent::__construct();
    $this->view = new PalabrasProhibidasView();
    $this->model = new PalabrasProhibidasModel();
  }

  public function index()
  {
    $palabrasProhibidas = $this->model->getPalabrasProhibidas();
    $this->view->mostrarPalabrasProhibidas($palabrasProhibidas);
  }

  public function create()
  {
    $this->view->mostrarCrearPalabraProhibida();
  }

  public function store()
  {
    $palabra = $_POST['palabra'];
    $this->model->guardarPalabraProhibida($palabra);
    header('Location: '.HOME.'/palabrasProhibidas');
  }

  public function destroy($params)
  {
    $id_palabra_prohibida = $params[0];
    $this->model->borrarPalabraProhibida($id_palabra_prohibida);
    header('Location: '.HOME.'/palabrasProhibidas');
  }
}

 ?>
