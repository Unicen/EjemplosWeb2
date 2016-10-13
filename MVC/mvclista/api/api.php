<?php
abstract class Api{
  protected $method = "";
  protected $endpoint = "";
  protected $args = array();

  function __construct($request){
    header("Content-Type: application/json");
    $this->args = explode('/', $request);
    //array_shift remueve el primer elemento ("tarea") y lo retorna (con eso elige que metodo llamar)
    $this->endpoint = array_shift($this->args);
    $this->method = $_SERVER['REQUEST_METHOD'];
  }

  public function processAPI() {
     if (method_exists($this, $this->endpoint)) {
       //llama al metodo que se llama como dice "endpoint" (similar a un switch)
        $retorno = $this->{$this->endpoint}($this->args);
       return $this->_response($retorno);
     }
     return $this->_response("No Endpoint: $this->endpoint", 404);
   }

   private function _response($data, $status = 200) {
       header("HTTP/1.1 " . $status . " " . $this->_requestStatus($status));
       return json_encode($data);
   }


   private function _requestStatus($code){
       $status = array(
         200 => "OK",
         404 => "Not found",
         500 => "Internal Server Error"
       );
       return ($status[$code])? $status[$code] : $status[500];
     }
}

 ?>
