<?php
class ClienteLazy
{
    
    public $nombre;
    
    private $_ordenes = null;
    
    function __construct($nombre) {
        $this->nombre = $nombre;
    }
    
    private function cargarOrdenes() {
        for ($i = 0; $i < 10; $i++) {
            $this->_ordenes[$i] = "Orden " . $i;
        }
    }
    
    public function getOrdenes() {
        
        if ($this->_ordenes == null) {
            $this->cargarOrdenes();
        }
        return $this->_ordenes;
    }
}
?>



