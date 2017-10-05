<?php
include_once '../model/TareasModel.php';
class TareasAPI extends Api
{
  public function __construct()
  {
    $this->model = new TareasModel();
  }

  function get($params=''){
    if(empty($params)){
      $tareas = $this->model->getTareas();
      return $this->response($tareas);
    }
    else{
      $tarea = $this->model->getTarea($params[0]);
      if(!empty($tarea)){
        return $this->response($tarea);
      }
      else{
        $error['error'] = "La tarea no existe";
        return $this->response($error, 404);
      }
    }
  }

}

 ?>
