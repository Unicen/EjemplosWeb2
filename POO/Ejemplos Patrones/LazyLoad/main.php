<?php
include "Cliente.php";
include "ClienteLazy.php";

print ("Cliente Comun \n");
$cliente = new Cliente("Nacho"); //Ordenes Cargadas en este punto

print($cliente->nombre . "\n");

//¿Que pasa si pongo un IF aca que se fije, si el nombre es Hugo cargue las ordenes?
$ordenes = $cliente->getOrdenes();

foreach ($ordenes as $orden) {
	echo $orden . "\n";
}
print ("Cliente Lazy \n");
$clienteLazy = new ClienteLazy("Nacho"); //Solo cargado el nombre en memoria
print($clienteLazy->nombre . "\n"); //Aun solo el nombre

//¿Que pasa si pongo un IF aca que se fije, si el nombre es Hugo cargue las ordenes?
$ordenes = $clienteLazy->getOrdenes(); //Ordenes cargadas en memoria

foreach ($ordenes as $orden) {
	echo $orden . "\n";
}

?>