<?php

session_start();

/**
 * Script principal de la aplicacion. Todos los requerimientos de los usuarios son tratados por este script. 
 * Este script rutea al controlador apropiado según la variable de action. 
 * 
 * 
 * @param String $action permite establecer el controlador y acción a ejecutar.
 * @todo Podemos cambiar los IF anidados por switchs
 *  
 */

error_reporting(E_ALL);
ini_set("display_errors", 1);

	/**
	 * Manejo de Seguridad
	 */
	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='demoAjax')
	{
		include "./controllers/IndexController.php";
		$controller = new IndexController();
		
		$ajaxMode = (array_key_exists('ajaxMode', $_REQUEST)&&!is_null($_REQUEST['ajaxMode']))?$_REQUEST['ajaxMode']:NULL;
		
		$controller->actionDemoAjax($ajaxMode);		
	}	
	else if(array_key_exists('action', $_REQUEST)&&$_REQUEST['action']=='login')
	{	
		include "./controllers/IndexController.php";
		$controller = new IndexController();
		$controller->actionLogin();		
	}
	else if(!isset($_SESSION['user'])){
		include "./controllers/IndexController.php";
		$controller = new IndexController();
		$controller->actionLoginForm();		
	} 		
	else if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='logout')
	{
		include "./controllers/IndexController.php";
		$controller = new IndexController();
		$controller->actionLogout();		
	}	
	/**
	 * Acciones
	 */
	else if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='index')
	{
		include "./controllers/IndexController.php";
		$controller = new IndexController();
		$controller->actionIndex();		
	}
	else if($_REQUEST['action']=='listarPersonas')
	{
		include "./controllers/PersonaController.php";
		$c = new PersonaController();
		$c->actionListar();
	}
	else if($_REQUEST['action']=='editarPersonas')
	{
		if(array_key_exists('id', $_GET)){
			include "./controllers/PersonaController.php";
			$c = new PersonaController();
			$c->actionEditar($_GET['id']);
		}
		else {
			echo "Error de Parametros";
		}
	}
	else 
	{
		echo "ERROR ACCION NO VALIDA";
	}
		 


?>