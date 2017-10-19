<?php

require_once('../model/TareasModel.php');
require_once('Api.php');
/**
 *
 */
class TareasApiController extends Api
{
  protected $model;

  function __construct()
  {
      parent::__construct();
      $this->model = new TareasModel();
//      $this->palabrasProhibidasModel = new PalabrasProhibidasModel();
  }

  public function getTareas($url_params = [])
  {
    switch (sizeof($url_params)) {
      case 0:
        $tareas = $this->model->getTareas();
        return $this->json_response($tareas, 200);
        break;
      case 1:
        $id_tarea = $url_params[0];
        $tarea = $this->model->getTarea($id_tarea);
        if($tarea)
          return $this->json_response($tarea, 200);
        else
          return $this->json_response(false, 404);
      default:
        return $this->json_response(false, 404);
        break;
    }
  }

  public function deleteTareas($url_params = [])
  {
    switch (sizeof($url_params)) {
      case 0:
        return $this->json_response(false, 400);
        break;
      case 1:
        $id_tarea = $url_params[0];
        $tarea = $this->model->getTarea($id_tarea);
        if($tarea)
        {
          $this->model->borrarTarea($id_tarea);
          return $this->json_response("Borrado exitoso.", 200);
        }
        else
          return $this->json_response(false, 404);
      default:
        return $this->json_response(false, 404);
        break;
    }
  }

  public function createTareas($url_params = []) {
    if(sizeof($url_params) == 0) {
      $body = json_decode($this->raw_data);
      $titulo = $body->titulo;
      $descripcion = $body->descripcion;
      $completada = $body->completada;
      $tarea = $this->model->guardarTarea($titulo, $descripcion, $completada);
      return $this->json_response($tarea, 200);

    }
    else {
      return $this->json_response(false, 404);
    }
  }

  public function editTarea($url_params = []) {
    if(sizeof($url_params) == 1) {
      $body = json_decode($this->raw_data);
      $id = $url_params[0];
      $titulo = $body->titulo;
      $descripcion = $body->descripcion;
      $completada = $body->completada;
      $tarea = $this->model->modificarTarea($id, $titulo, $descripcion, $completada);
      return $this->json_response($tarea, 200);

    }
    else {
      return $this->json_response(false, 404);
    }
  }
}

 ?>
