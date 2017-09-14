<?php
include_once('model/TareasModel.php');
include_once('view/TareasView.php');
define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');
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

  public function create()
  {
    $this->view->mostrarCrearTareas();
  }

  public function store()
  {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $completada = isset($_POST['completada']) ? $_POST['completada'] : 0;
    if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
      if($this->tienePalabrasProhibidas($titulo)){
        $this->view->errorCrear("El titulo tiene palabras prohibidas", $titulo, $descripcion, $completada);
      }
    else{
      $this->model->guardarTarea($titulo, $descripcion, $completada);
      header('Location: '.HOME);
    }
    }
    else{
      $this->view->errorCrear("El campo titulo es requerido", $titulo, $descripcion, $completada);
    }
  }

  public function destroy($params)
  {
    $id_tarea = $params[0];
    $this->model->borrarTarea($id_tarea);
    header('Location: '.HOME);
  }

  private function tienePalabrasProhibidas($titulo){
    $pprohibidas = ['Me gustaria', 'Quisiera', 'Web II'];
    foreach ($pprohibidas as $palabra) {
      if(strpos($titulo, $palabra) !== false)
        return true;
    }
    return false;
  }
}

 ?>
