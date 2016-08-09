<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo Ajax</title>
    <link href="css/bootstrap.css" rel="stylesheet">
	<script type="text/javascript" src = "./js/main.js"> </script>
  </head>

  <body onLoad="getData();">
    <div class="container">
      <div class="page-header">
        <h1>Ejemplo de utilizacion de Ajax</h1>
      </div>
      <label class="control-label" for="nombre">Nombre</label>
      <div class="controls">
        <div class="input-prepend">
          <span class="add-on"><i class="icon-user"></i></span>
          <select id="nombre" onChange = "getData();">
	  	{foreach $nombres as $nombre}
	 		<option value="{$nombre.Nombre}">{$nombre.Nombre}</option>
		{/foreach}
      	</select>
        </div>
      </div>
      
      <table class="table table-striped">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Email</th>
        </tr>
      </thead>
       <tbody id="tableData">

      </tbody>
    </table>
    </div>
  </body>
</html>
