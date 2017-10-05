<?php
class Api
{
  protected $model;

  public function __construct()
  {
    header("Content-Type: application/json");
  }

  public function response($data, $status = 200)
  {
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
