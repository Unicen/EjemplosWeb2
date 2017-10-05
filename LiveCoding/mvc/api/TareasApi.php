<?php

include_once '../model/Model.php';
include_once '../model/TareasModel.php';
class TareasAPI
{
  private $model;

  public function __construct(Type $foo = null)
  {
    $this->model = new TareasModel();
  }

  function get($params=''){
    if(empty($params)){
      header("Content-Type: application/json");
      header("HTTP/1.1 200 OK");
      return json_encode($this->model->getTareas());
    }
    else{
      $tarea = $this->model->getTarea($params[0]);
      if(!empty($tarea)){
        header("Content-Type: application/json");
        header("HTTP/1.1 200 OK");
        return json_encode($tarea);
      }
      else{
        header("Content-Type: application/json");
        header("HTTP/1.1 404 Not Found");
        $error['error'] = "La tarea no existe";
        return json_encode($error);
      }
    }
  }

}

 ?>
