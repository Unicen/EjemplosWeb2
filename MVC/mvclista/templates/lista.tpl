<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Tareas</title>
  </head>
  <body>
    <h1>Lista de Tareas</h1>
    <ul>
      {foreach from=$tareas item=tarea}
      <li>{$tarea}</li>
      {/foreach}
    </ul>
  </body>
</html>
