<?php
require 'api.php';
require '../models/TareasModel.php';

class TareaApi extends Api
{
  private $model;

  public function __construct($request)
 {
    parent::__construct($request);
    $this->model = new TareasModel();
  }

  protected function tarea($argumentos){
    switch ($this->method) {
      case 'GET':
          if(count($argumentos)>0){
            $tarea = $this->model->getTarea($argumentos[0]);
            $error['Error'] = "La tarea no existe";
            return ($tarea) ? $tarea : $error;
          }else{
            return $this->model->getTareas();
          }
        break;
      case 'DELETE':
          if(count($argumentos)>0){
            $error['Error'] = "La tarea no existe";
            $success['Success'] = "La tarea se borro";
            $filasAfectadas = $this->model->eliminarTarea($argumentos[0]);
            return ($filasAfectadas == 1) ? $success : $error;
          }
        break;
        case 'POST':
            if(count($argumentos)==0){
              $error['Error'] = "La tarea no se creo";
              $id_tarea = $this->model->crearTarea($_POST['tarea'],[]);
              return ($id_tarea > 0) ? $this->model->getTarea($id_tarea) : $error;
            }
          break;
      default:
           return "Only accepts GET";
        break;
    }
   }



}


 ?>
