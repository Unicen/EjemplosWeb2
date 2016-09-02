<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Tareas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <h1>Lista de Tareas</h1>
    <form id="formTarea" action="index.php?action=guardar_tarea" method="post">
      <input type="text" name="tarea"  required value="" placeholder="Ingrese su Tarea">
      <input type="submit" name="Agregar" id="agregarTareaBtn">
    </form>
    <div id="listaTareas">
      {include file='lista.tpl'}
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/tareas.js"></script>
  </body>
</html>