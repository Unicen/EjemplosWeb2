<?php

include_once 'tareas.php';

function home()
{
  $tareas = getTareas();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>To Do App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1>Lista de Tareas</h1>
          <ul class="list-group">
<?php
          foreach ($tareas as $tarea) {
            echo '<li class="list-group-item">'.$tarea['titulo'].': '.$tarea['descripcion'].'</li>';
          }
?>
          </ul>
          <form>
            <div class="form-group">
              <label for="titulo">Titulo</label>
              <input type="text" class="form-control" id="titulo" placeholder="Titulo de la tarea">
            </div>
            <div class="form-group">
              <label for="descripcion">Descripcion</label>
              <textarea name="descripcion" id="descripcion" rows="8" cols="50"></textarea>
            </div>
            <div class="form-group">
              <label for="completa">Completada</label>
              <input type="checkbox" id="completa">
            </div>
            <button type="submit" class="btn btn-default">Crear</button>
          </form>
        </div>

      </div>


    </div><!-- /.container -->
  </body>
</html>
<?php }  ?>
