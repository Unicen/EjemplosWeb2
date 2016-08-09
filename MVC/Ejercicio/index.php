<?php
	require('./libs/Smarty.class.php');	
	


//Conexión
	$host = "localhost";
	$db = "ajax";
	$user = "root";
	$pass = "";

	try{
		$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
	}
	catch(PDOException $pe){
		die('Error de conexion, Mensaje: ' .$pe->getMessage());
	}

//Consulta
		
		$sql = "SELECT DISTINCT Nombre FROM persona";
		$resultado = $conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($conn->errorInfo()[2]));
		}
		$nombres=$resultado->fetchAll(PDO::FETCH_ASSOC);
		
		$smarty = new Smarty;
		$smarty->debugging = true;
		$smarty->assign("nombres", $nombres);
		
		//print_r($nombres);
		
		$smarty->display('index.tpl');
?>
