<?php

$usuario = $_GET['usuario'];
echo $usuario;

echo '<form id="formulario" method="post">
    <input type="text" name="nombre" />
    <input type="text" name="edad" />
    <input type="submit">
  </form>
  <script>
    $("#formulario").on("submit",function(event) {
  			event.preventDefault();
  let serializedData = $(this).serialize();
  		$.post("ejemplopost.php", serializedData,
                   function(response) {
  			      		alert("Response: "+response);
      });
     });
  </script>
  ';

 ?>
