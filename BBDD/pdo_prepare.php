<?php
//Configuración
$host 	= "localhost";
$db	= "ejemplo";
$user	= "root";
$pass	= "";

//Conexión
$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

$titulo = 'Titulo 1';

//Consulta - Parametros Posicionales
echo "<h1>Parametros Posicionales</h1>";
$sql = "SELECT * FROM mensaje Where Titulo = ?";
$q = $conn->prepare($sql);
$q->execute(array($titulo));

// fetch
while($r = $q->fetch()){
  print_r($r);
}
echo "</br>";
//Otra Opcion - Placeholders
//Consulta
echo "<h1>Parametros Placeholders</h1>";
$sql = "SELECT * FROM mensaje Where Titulo = :titulo";
$q = $conn->prepare($sql);
$q->execute(array(':titulo'=>$titulo));

// fetch
while($r = $q->fetch()){
  print_r($r);
}

?>
