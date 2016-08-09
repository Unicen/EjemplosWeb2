<?php
include "Registry.php";

$registry = new Registry();
$registry->set("Nombre","Nacho");
$registry->set("Apellido","Jonas");

print ($registry->get("Nombre")."\n");
print ($registry->get("Apellido")."\n");
?>