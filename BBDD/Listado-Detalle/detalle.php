<?php
/** 
* Este ejemplo muestra como hacer una pagina que muestra un registro de una tabla.
* El registro a mostrar se recibe mediante el método GET en el parametro "mensaje"
* @param _GET["mensaje"] el id del mensaje a mostrar
* @autor Javier Dottori
*/

//Configuración
$host 	= "localhost";
$db	= "ejemplo";
$user	= "root";
$pass	= "";

//TODO: verificar que mensaje este seteado 
$idMensaje = $_GET["mensaje"];


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
      Detalle del Mensaje ID: <?=$idMensaje?>
	</h1>
<?php
//Consulta
$sql = "SELECT * FROM mensaje Where id = :id";


//Ejecucion
$q = $conn->prepare($sql);
$q->execute(array(':id'=>$idMensaje));

//Si es null, hubo un error
if(!$q)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}

//Si todo salió bien imprimo todos los registros.
while($r = $q->fetch()){
  //print_r($r);
	  echo "<h2>";
	  echo $r["titulo"];
	  echo "</h2>";
	  echo "<p>";
	  echo $r["mensaje"];
	  echo "</p>";
}


?>
  </body>
</html>