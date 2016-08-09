<?php

	class Persona{
		public static $nombredelaclase="Persona";
		protected $nombre;
		private $edad;
		private $dni;
	
	public static function getAnioDeNacimiento($edad)
	{
		return 2014 - $this->edad;
	}
	function __destruct()
{
	echo $this->nombre." </br>Destruyendo";
}	
	
	function setNombre($n)
		{
			$this->nombre = $n;
		}
	}
	interface Enrolado
	{
		function getLU();
		function setLU($lu);
	}
	class Alumno extends Persona implements Enrolado
	{
		private $lu;
		private $porcentajeMateriasAprobadas;
		
		function setLU($lu)
		{
			$this->lu = $lu;
		}
		
		function getLU()
		{
			return $this->nombre.": ".$this->lu;
		}
		
		function __construct($nombre, $edad, $dni)
	{
		$this->nombre = $nombre;
		$this->edad = $edad;
		$this->dni = $dni;
	}
	}

	class Graduado extends Persona implements Enrolado
	{
		private $libreta;
		private $anoDeGraduacion;
		function getLU()
		{
			return $this->libreta;
		}
		function setLU($lu)
		{
			$this->libreta = $this->nombre.": ".$lu;
		}
	}

	echo Persona::getAnioDeNacimiento(25);
	$a1 = new Alumno("Matias",31548852,25);
	echo $a1::$nombredelaclase;
	$a1->setLU(1);
	//$a1->setNombre("Matias");
	$a2 = new Alumno("Mariel",31548852,25);
	$a2->setLU(2);
	//$a2->setNombre("Mariel");
	$a3 = new Alumno("Natalio",31238852,22);
	$a3->setLU(3);
	//$a3->setNombre("Natalio Ruiz");
	$g1 = new Graduado("Natalio",123123,24);
	$g1->setLU(11);
	$a = array($a1,$a2,$a3,$g1);
	
	for($i=0;$i<count($a);$i++)
	{
		echo "</br>Libreta :". $a[$i]->getLU();
	}

?>


