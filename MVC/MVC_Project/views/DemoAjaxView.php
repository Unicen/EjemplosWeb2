<?php

require('View.php');	

class DemoAjaxView extends View	{

	function render(){
		$this->smarty->display('demoAjaxForm.tpl');
	}
	
}


?>