<?php
//Configuración
$host 	= "localhost";
$db	= "ejemplo";
$user	= "root";
$pass	= "";

//Conexión
$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

$titulo = $_POST["titulo"];
$texto = $_POST["mensaje"];

//Consulta - Parametros Posicionales
$sql = "INSERT INTO mensaje (titulo,mensaje) VALUES (:titulo,:texto)";
$q = $conn->prepare($sql);
$q->execute(array(':titulo'=>$titulo,':texto'=>$texto));
//echo "Se ejecuto: ";
//print_r($q);
header("Location: index.php");
die();

?>