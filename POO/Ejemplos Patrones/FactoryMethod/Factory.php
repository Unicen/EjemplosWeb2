<?php
abstract class Auto{
	public $marca;
}

class Ferrari
{
	function __construct(){
	$this->marca = "Ferrari";
	}

}

class Ford
{
	function __construct(){
		$this->marca = "Ford";
	}
}

class Chevrolet
{
	function __construct(){
		$this->marca = "Chevrolet";
	}
}

abstract class  Creator  {
    
    abstract public function  createObject ( $type );
}

class  CreadorAutos  extends  Creator  {
    public function  createObject ( $type ) {
        switch ( $type )
		{
			case "Ford":
			{
				return new Ford();
			}

			case "Chevrolet":
			{
				return new Chevrolet();
			}
			default:
			{
				return new Ferrari();
			}
		}
	}
}


?>