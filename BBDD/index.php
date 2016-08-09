<?php
//ConfiguraciÃ³n
$host 	= "localhost";
$db	= "tpalgo";
$user	= "root";


$conn = new PDO("mysql:host=$host;dbname=$db",$user);

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
	  	<tr>
			<td>1</td>
			<td>Titulo 1</td>
			<td><?php
				$q = $conn->query($sql);
				while($r = $q->fetch()){
					print_r($r);
				?></td>
	  	</tr>
	  	<tr>
			<td>2</td>
			<td>Titulo 2</td>
			<td>Este es el texto del mensaje 2</td>
	  	</tr>
  		</tbody>
</table>
  </div>
</body>
</html>