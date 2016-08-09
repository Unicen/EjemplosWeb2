<?php
class Model
{
    public $string;
	private $string2;
    
	public function __construct(){
        $this->string = "MVC + PHP = Genial!";
		$this->string2 = "Hola a tOdOS";
    }
	
	public function getString2()
	{
		return $this->string2;
	}
	
	public function getSaludo()
	{
		return "Hola";
	}
}
?>