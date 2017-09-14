<?php
include_once('model/TareasModel.php');
include_once('view/TareasView.php');
/**
 *
 */
class TareasController
{

  private $view;
  private $model;

  function __construct()
  {
    $this->view = new TareasView();
    $this->model = new TareasModel();
  }

  public function index()
  {
    $tareas = $this->model->getTareas();
    $this->view->mostrarTareas($tareas);
  }
}

 ?>
