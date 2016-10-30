<?php
require_once('views/LoginView.php');
require_once('models/UserModel.php');
require_once('controllers/TareasController.php');

class LoginController
{
  private $vista;
  private $modelo;

  function __construct()
  {
    $this->modelo = new UserModel();
    $this->vista = new LoginView();
  }

  public function validar(){

  }

  public function login(){
    if(!isset($_REQUEST['txtUser']))
      $this->vista->mostrar([]);
    else {
      $user = $_REQUEST['txtUser'];
      $pass = $_REQUEST['txtPass'];
      $hash = $this->modelo->getUser($user)["password"];
      //TODO: falta controlar el caso de que el usuario no exista
      if(password_verify($pass, $hash))
      {
        session_start();
        $_SESSION['USER'] = $user;
        header("Location: mostrar_tareas");
        die();
      }
      else
      {
            $this->vista->mostrar(["BAD"]);
      }

    }
  }

  public function checkLogin(){
    session_start();
    if(!isset($_SESSION['USER'])){
      header("Location: index.php");
      die();
    };
  }

  public function logout(){
    session_start();
    session_destroy();
    header("Location: login");
    die();
  }

}

 ?>
