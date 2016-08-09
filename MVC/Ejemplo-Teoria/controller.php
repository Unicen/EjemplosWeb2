<?php
class Controller
{
    private $model;
	private $view;
 
    public function __construct($model, $view) {
        $this->model = $model;
		$this->view = $view;
    }
	
	public function helloWorld()
	{
		$this->view->output($this->model->string);
	}
	
	public function holaATodosMayusculas()
	{
		$stringAImprimir = $this->model->getString2();
		
		$this->view->output(strtoupper($stringAImprimir));
	}
	public function holaConNombre($nombre)
	{
		$saludo = $this->model->getSaludo();
		$saludo .= " ".$nombre;
		$this->view->output($saludo);
	}
	public function Ejecutar()
	{
		if(isset($_GET["nombre"]))
			echo $this->holaConNombre($_GET["nombre"]);
		else
			echo $this->holaATodosMayusculas();
	}
}
?>