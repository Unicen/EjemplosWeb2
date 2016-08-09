<?php

include "./models/modelo_persona.php";
include "./models/modelo_tipo.php";
include "./views/ViewPersonas.php";

class PersonaController{
	
	public function actionListar(){
		$personas = new Persona();
		$v = new VistaPersona();
		$v->mostrar_personas($personas->load());		
	}
	
	public function actionEditar($id){
		echo "FUNCION NO IMPLEMENTADA";
	}
	
}


?>