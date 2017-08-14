<?php

function url(){
    return 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
}

function mostrar_about(){
?>
  <!DOCTYPE html>
  <html>
    <head>
      <base href="<?php  echo url(); ?>" target="_blank">
      <meta charset="utf-8">
      <title>About</title>
    </head>
    <body>
      <h1>Equipo creador de la calculadora</h1>
      <img src="images/team.jpg" alt="">
    </body>
  </html>
<?php
  }

function mostrar_juan(){
  ?>
    <!DOCTYPE html>
    <html>
      <head>
        <base href="<?php  echo url(); ?>" target="_blank">
        <meta charset="utf-8">
        <title>About</title>
      </head>
      <body>
        <h1>Este es Juan Codigo</h1>
        <img src="images/juan.jpg" alt="">
      </body>
    </html>
  <?php
}
?>
