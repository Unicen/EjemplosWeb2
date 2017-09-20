<?php
include_once('model/PalabrasProhibidasModel.php');
include_once('view/PalabrasProhibidasView.php');

class PalabrasProhibidasController
{
  private $view;
  private $model;

  function __construct()
  {
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
}

 ?>
