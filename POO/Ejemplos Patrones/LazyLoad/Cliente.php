<?php
class Cliente {

	public $nombre;

	private $_ordenes;

	function __construct($nombre) {
		$this->nombre = $nombre;
		$this->cargarOrdenes();
	}

	private function cargarOrdenes() {
		for ($i = 0; $i < 10; $i++) {
			$this->_ordenes[$i] = "Orden " . $i;
		}
	}

	public function getOrdenes() {

		return $this->_ordenes;
	}
}
?>



