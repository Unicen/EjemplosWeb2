<?php
include_once 'tareas.php';
define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');

function borrarTarea($params){
  deleteTarea($params[0]);
  header('Location: '.HOME);
}

function agregarTarea(){
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $completada = isset($_POST['completada']) ? $_POST['completada'] : 0;
  insertTarea($titulo, $descripcion, $completada);
  header('Location: '.HOME);
}

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
            if ($tarea['completado']){
              echo '<li class="list-group-item"><s>'.$tarea['titulo'].': '.$tarea['descripcion'].'</s><a href="borrarTarea/'.$tarea['id_tarea'].'"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></li>';
            }
            else{
              echo '<li class="list-group-item">'.$tarea['titulo'].': '.$tarea['descripcion'].'</s><a href="borrarTarea/'.$tarea['id_tarea'].'"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></li>';
            }

          }
?>
          </ul>
          <form action="agregarTarea" method="post">
            <div class="form-group">
              <label for="titulo">Titulo</label>
              <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo de la tarea">
            </div>
            <div class="form-group">
              <label for="descripcion">Descripcion</label>
              <textarea name="descripcion" id="descripcion" name="descripcion" rows="8" cols="50"></textarea>
            </div>
            <div class="form-group">
              <label for="completada">Completada</label>
              <input type="checkbox" id="completada" name="completada" value="1">
            </div>
            <button type="submit" class="btn btn-default">Crear</button>
          </form>
        </div>

      </div>


    </div><!-- /.container -->
  </body>
</html>
<?php }  ?>
