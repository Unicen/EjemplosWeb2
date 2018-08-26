<?php

function AboutPersonalizado($nombre){
  ?>
    <!DOCTYPE html>
    <html>
      <head>
          <?php
          echo '<base href="http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]).'/" target="_blank">';

          ?>
        <meta charset="utf-8">
        <title>About Personalizado</title>
      </head>
      <body>
        <h2>About Personalizado </h2>
        <?php

            echo '<img src="images\juan.png" >';

         ?>

      </body>
    </html>
<?php
}

function About(){
  ?>
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>About </title>
      </head>
      <body>
          <h1>About WEB II</h1>
          <img src="images\about.jpg" alt="">
      </body>
    </html>
<?php
}


 ?>
