<!DOCTYPE html>
<html>
  <head>
    <base href="//localhost/web/EjemplosWeb2/MVC/mvclista/" />
    <meta charset="utf-8">
    <title>Lista de Tareas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>



    {if isset($mensaje)}
      <div class="alert alert-{$tipoMensaje}" role="alert">{$mensaje}</div>
    {/if}

    <h1>Lista de Tareas</h1>

    <form id="formTarea" action="guardar_tarea" method="post" enctype="multipart/form-data">
      <input type="text" name="tarea"  required value="" placeholder="Ingrese su Tarea">
      <input type="file" name="imagenes[]" required value="" multiple>
      <input type="submit" name="Agregar" id="agregarTareaBtn">
    </form>
    <button id="refresh" type="button" class="btn btn-default btn-xs pull-right" aria-label="Refresh">
                <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
     </button>
    <div>
      {include file='lista.tpl'}
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.1.3/mustache.js"></script>
    <script src="js/tareas.js"></script>
  </body>
</html>
