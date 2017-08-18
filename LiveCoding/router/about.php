<?php

  function about($nombre=['']){
    $html = '<!DOCTYPE html>
    <html>
      <head>
        <base href="http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/'.'" target="_blank">
        <meta charset="utf-8">
        <title>About</title>
      </head>
      <body>';
    if($nombre[0]==='juan'){
      $html.='<h1>Soy Juan Codigo!!!</h1>';
      $html.='<img src="images/juan.jpg" alt="Soy Juan Codigo!">';
    }
    else{
      $html.='<h1>Somos el gran grupo de desarrolladores</h1>';
      $html.='<img src="images/equipo.jpg" alt="Somos el gran equipo!">';
    }
    $html.='</body>
    </html>';

    $html.="Server Name: ".$_SERVER['SERVER_NAME']."</br>";
    $html.="PHP Self: ".$_SERVER['PHP_SELF']."</br>";
    $html.="DIR PHP Self: ".dirname($_SERVER['PHP_SELF']);

    return $html;
  }
?>
