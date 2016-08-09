<?php
//Configuración
$host 	= "localhost";
$db	= "ejemplo";
$user	= "root";
$pass	= "";

//Conexión
$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

$titulo = 'Titulo Updateado desde PHP';
$texto = 'Este es un mensaje updateado desde PHP';


//Consulta - Parametros Posicionales
$sql = "UPDATE mensaje SET  titulo=:titulo, texto=:texto where id=:id";
$q = $conn->prepare($sql);
$q->execute(array(':titulo'=>$titulo,':texto'=>$texto, ':id'=>2));
echo "Se ejecuto: ";
print_r($q);

?>