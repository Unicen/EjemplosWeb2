<?php
include_once('model/TareasModel.php');
include_once('model/PalabrasProhibidasModel.php');
include_once('view/TareasView.php');

class TareasController extends SecuredController
{
  private $palabrasProhibidasModel;

  function __construct()
  {
    parent::__construct();
    $this->view = new TareasView();
    $this->model = new TareasModel();
    $this->palabrasProhibidasModel = new PalabrasProhibidasModel();
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

  private function sonJPG($imagenesTipos){
      foreach ($imagenesTipos as $tipo) {
        if($tipo != 'image/jpeg') {
          return false;
        }
      }
      return true;
  }

  public function store()
  {
    $rutaTempImagenes = $_FILES['imagenes']['tmp_name'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $completada = isset($_POST['completada']) ? $_POST['completada'] : 0;
    if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
      if($this->tienePalabrasProhibidas($titulo)){
        $this->view->errorCrear("El titulo tiene palabras prohibidas", $titulo, $descripcion, $completada);
      }
    else{
      if($this->sonJPG($_FILES['imagenes']['type'])) {
        $this->model->guardarTarea($titulo, $descripcion, $completada, $rutaTempImagenes);
        header('Location: '.HOME);
      }
      else{
        $this->view->errorCrear("Las imagenes tienen que ser JPG.", $titulo, $descripcion, $completada);
      }
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

  public function finish($params)
  {
    $id_tarea = $params[0];
    $this->model->finalizarTarea($id_tarea);
    header('Location: '.HOME);
  }

  private function tienePalabrasProhibidas($titulo){
    $pprohibidas = $this->palabrasProhibidasModel->getPalabrasProhibidas();
    foreach ($pprohibidas as $palabra) {
      if(strpos($titulo, $palabra['palabra']) !== false)
        return true;
    }
    return false;
  }
}

 ?>
