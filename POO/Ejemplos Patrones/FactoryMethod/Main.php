<?php
include "Factory.php";

$creadorAutos = new CreadorAutos();

$ford = $creadorAutos->createObject("Ford");
$chivo = $creadorAutos->createObject("Chevrolet");
$ferrari = $creadorAutos->createObject("Ferrari");
$mercedes = $creadorAutos->createObject("Mercedes");

print($ford->marca."\n");
print($chivo->marca."\n");
print($ferrari->marca."\n");
print($mercedes->marca."\n");
?>