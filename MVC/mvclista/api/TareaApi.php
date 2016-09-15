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
   if($this->method == 'GET' && count($argumentos)==0){
     return $this->model->getTareas();
   }
   else{
     if($this->method == 'GET' && count($argumentos)>0){
       return $this->model->getTarea($argumentos[0]);
     }
    else{
      return "Only accepts GET";
    }
   }
 }



}


 ?>
