<?php
/** 
* Este ejemplo muestra como hacer una pagina que contiene un listado de los registros de una tabla.
* Se muestra el titulo de cada mensaje, con un link a una pagina detalle para cada uno.
* @param _GET["mensaje"] el id del mensaje a mostrar
* @autor Javier Dottori
*/

//Configuración
$host 	= "localhost";
$db	= "ejemplo";
$user	= "root";
$pass	= "";

//Conexión
try{

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
}
catch(PDOException $pe)
{
	die('Error de conexion, Mensaje: ' .$pe->getMessage());
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Titulo</title>
  </head>
  <body>
    <h1>
      Listado de Mensajes
	</h1>
<?php
//Consulta
$sql = "SELECT * FROM mensaje";

//Ejecucion
$q	 = $conn->query($sql);

//Si es null, hubo un error
if(!$q)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}


//Si todo salió bien imprimo todos los registros.
while($r = $q->fetch()){
  //print_r($r);
  
  echo "<p>";
  echo '<a href="detalle.php?mensaje='.$r["id"].'">';
  echo $r["titulo"];
  echo "</a>";
  echo "</p>";
}
?>
  </body>
</html>