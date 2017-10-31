<?php

class SecuredController extends Controller
{

  function __construct()
  {
    session_start();
    if(isset($_SESSION['USER'])){
      if (time() - $_SESSION['LAST_ACTIVITY'] > 10) {
        header('Location: '.LOGOUT);
        die();
      }
      $_SESSION['LAST_ACTIVITY'] = time();
    }
    else {
      header('Location: '.LOGIN);
      die();
    }
  }
}

 ?>
