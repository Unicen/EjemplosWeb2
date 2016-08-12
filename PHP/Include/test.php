<?php
function foo(){
    global $prov;
    require 'localidades1.php';
    echo "Origen $ciudad $prov";
}
foo(); // Origen Tandil BA
echo "Origen $ciudad $prov";// Origen BA
?>
