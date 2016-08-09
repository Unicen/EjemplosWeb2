<?php

include_once "modelodb.php";

class Tipo extends ModeloDB{
	
	public function load(){
		return $this->query("Select * from tipo_persona");
	}
	
}

?>