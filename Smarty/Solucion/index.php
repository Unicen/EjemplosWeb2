<?php
require('./libs/Smarty.class.php');
//Configuración
$host 	= "localhost";
$db	= "smartytest";
$user	= "root";
$pass	= "";

//Creo el Smarty
$smarty = new Smarty;

//Conexión
$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);


//Consulta
$sql = "SELECT * FROM persona";

//Variables Auxiliares
$nombre = array();
$apellido = array();
$edad = array();
$i = 0;
//Ejecucion

$sth = $conn->prepare($sql);
$sth->execute();
$result = $sth->fetchAll();
$smarty->assign("personas",$result);

$smarty->display('index.tpl');
?>

