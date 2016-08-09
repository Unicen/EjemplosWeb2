<?php

class IndexController{
	
	public function actionIndex(){
		include "./views/IndexView.php";
		$view = new IndexView;
		$view->render();
	}
	
	
	public function actionLoginForm(){
		include "./views/LoginFormView.php";
		$view = new LoginFormView;
		$view->render();
	}


	public function actionDemoAjax($ajaxMode = NULL){
		if(is_null($ajaxMode)){
			include "./views/DemoAjaxView.php";
			$view = new DemoAjaxView;
			$view->render();
		}
		else if($ajaxMode == 'valorUser'){
			
			$i = 0;
			if(array_key_exists('intento', $_SESSION))
				$i = $_SESSION['intento'];
			$i++;
			$_SESSION['intento'] = $i; 
			
			$r = array(
				'valor' => $_REQUEST['username'],
				'otroParam' => 'OK',
				'intento' => array(
					'nro' => $i,
					'otroParam2' => 'Intento',
				)
			);
			
			echo json_encode($r);
			exit();
		}
		else if($ajaxMode == 'limpiarContador'){
			
			$_SESSION['intento'] = 0; 
			
			$r = array(
				'codigoHTML' => '<h1>Limpie!!</h1>',
			);
			
			echo json_encode($r);
			exit();
		}
	}

	
	public function actionLogin(){
		// Aqui hay que reemplazar por un modelo 
		$user = 'admin';
		$pass = 'admin';
	
		// Acceso
		if(($_POST['user']==$user)&&($_POST['pass']==$pass)){
			$_SESSION['user'] = 'admin';
			$this->actionIndex();
		}
		else{
			$this->actionLoginForm();
		}	
		
	}

	public function actionLogout(){
		session_destroy();
		$this->actionLoginForm();
	}
	
	
}

?>