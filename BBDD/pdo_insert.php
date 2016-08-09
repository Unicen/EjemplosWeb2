<?php
//Configuración
$host 	= "localhost";
$db	= "ejemplo";
$user	= "root";
$pass	= "";

//Conexión
$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

$titulo = 'Titulo Insertado desde PHP';
$texto = 'Este es un mensaje inserado desde PHP';

//Consulta - Parametros Posicionales
$sql = "INSERT INTO mensaje (titulo,texto) VALUES (:titulo,:texto)";
$q = $conn->prepare($sql);
$q->execute(array(':titulo'=>$titulo,':texto'=>$texto));
echo "Se ejecuto: ";
print_r($q);

?>