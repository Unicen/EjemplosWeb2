<?php
    echo "Este es el router de la API<br>";
    echo "Se capturaron los siguientes parametros<br>";
    echo "<ul>";

    $params = explode("/",$_GET["params"]);

    foreach( $list_params as $param )
    {
        echo "<li>".$param."</li>";
    }

    echo "</ul>";
?>
