<?php
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
	die('Error de conexion, Mensaje: ' -$pe->getMessage());
}

//Consulta
$sql = "SELECT * FROM mensaje";

//Ejecucion
$q	 = $conn->query($sql);

//Si es null, hubo un error
if(!$q)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}

?>
<html>
<head>
	<title>Ejemplo PDO - PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
 <div class="container">
    <h1> Listado de Mensajes </h1>
    <table class="table table-hover">
    	<thead>
	  	<tr>
			<td>ID</td>
			<td>Titulo</td>
			<td>Mensaje</td>
	  	</tr>
  		</thead>
    	<tbody>
	  	
			<?php
				$q = $conn->query($sql);
				while($r = $q->fetch()){
				?>
			<tr>
				<td>
					<?= $r["id"]?>
				</td>
				<td>
					<?= $r["titulo"]?>
				</td>
				<td>
					<?=	$r["mensaje"] ?>
				</td>
			</tr>
			<?php
				}
			?>	  	
  		</tbody>
		
		<form action="pdo_insert.php" method="post">
			<input type="text" name="titulo"/>
			<input type="text" name="mensaje"/>
			<input type="submit" name="enviar"/> 
		</form>
</table>
  </div>
</body>
</html>